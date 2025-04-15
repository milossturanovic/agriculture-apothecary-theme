/**
 * Ajax Pagination for WordPress Products Grid
 * Only runs on the Proizvodi page template
 */
jQuery(document).ready(function($) {
    // Check if we're on the right page by looking for the product grid container
    if ($('#product-grid-container').length === 0) {
        return; // Exit early if not on the right page
    }

    // Store current state
    let currentPage = 1;
    let currentSort = $('#product-sort').val() || 'default';
    let selectedCategory = '';
    let selectedTag = '';
    let searchQuery = '';
    let searchTimeout = null;

    // Debounce function to delay search
    function debounce(func, wait) {
        return function() {
            const context = this;
            const args = arguments;
            clearTimeout(searchTimeout);
            searchTimeout = setTimeout(function() {
                func.apply(context, args);
            }, wait);
        };
    }

    // Function to load products via Ajax
    function loadProducts(page = 1, sort = currentSort, category = selectedCategory, tag = selectedTag, search = searchQuery) {
        // Show loading indicator
        $('#product-grid-container').addClass('loading').append('<div class="loading-overlay"><div class="spinner"></div></div>');
        
        // Update current state
        currentPage = page;
        currentSort = sort;
        selectedCategory = category;
        selectedTag = tag;
        searchQuery = search;

        $.ajax({
            url: ajax_pagination_params.ajax_url,
            type: 'POST',
            data: {
                action: 'ajax_load_products',
                page: page,
                sort: sort,
                category: category,
                tag: tag,
                search: search,
                nonce: ajax_pagination_params.nonce
            },
            success: function(response) {
                if (response.success) {
                    // Update products grid
                    $('#product-grid-container').html(response.data.products);
                    
                    // Update pagination
                    $('#ajax-pagination').html(response.data.pagination);
                    
                    // Update products count info
                    $('.products-count-info').html(response.data.count_info);
                    
                    // Update URL for better user experience (without page reload)
                    let newUrl = updateUrlParameter(window.location.href, 'paged', page);
                    newUrl = updateUrlParameter(newUrl, 'sort', sort);
                    if (category) newUrl = updateUrlParameter(newUrl, 'category', category);
                    else newUrl = removeUrlParameter(newUrl, 'category');
                    
                    if (tag) newUrl = updateUrlParameter(newUrl, 'tag', tag);
                    else newUrl = removeUrlParameter(newUrl, 'tag');
                    
                    if (search) newUrl = updateUrlParameter(newUrl, 'search', search);
                    else newUrl = removeUrlParameter(newUrl, 'search');
                    
                    window.history.pushState({page: page}, '', newUrl);
                    
                    // Update active states
                    updateActiveFilters();
                }
            },
            error: function(xhr, status, error) {
                console.error('AJAX Error:', error);
                alert('Error loading products. Please try again.');
            },
            complete: function() {
                // Remove loading indicator
                $('#product-grid-container').removeClass('loading');
                $('.loading-overlay').remove();
            }
        });
    }

    // Function to update active filter states
    function updateActiveFilters() {
        // Reset all active states
        $('.filter-category').removeClass('active');
        $('.filter-tag').removeClass('active');

        // Set active states based on current selection
        if (selectedCategory) {
            $('.filter-category[data-category="' + selectedCategory + '"]').addClass('active');
        } else {
            $('.filter-category[data-category=""]').addClass('active'); // "All" category
        }

        if (selectedTag) {
            $('.filter-tag[data-tag="' + selectedTag + '"]').addClass('active');
        }
    }

    // Handle pagination clicks
    $(document).on('click', '#ajax-pagination a.page-link', function(e) {
        e.preventDefault();
        const page = $(this).data('page');
        if (page) {
            loadProducts(page);
            // Scroll to top of products section
            $('html, body').animate({
                scrollTop: $('#product-grid-container').offset().top - 100
            }, 500);
        }
    });
    
    // Handle sort change
    $('#product-sort').on('change', function() {
        currentSort = $(this).val();
        loadProducts(1, currentSort); // Reset to first page when sorting changes
    });

    // Handle search input with debounce
    $('#product-search').on('input', debounce(function() {
        searchQuery = $(this).val();
        selectedCategory = ''; // Reset category selection
        selectedTag = ''; // Reset tag selection
        $('.filter-category').removeClass('active');
        $('.filter-tag').removeClass('active');
        $('.filter-category[data-category=""]').addClass('active'); // Set "All" category as active
        loadProducts(1, currentSort, '', '', searchQuery);
    }, 500)); // 500ms delay

    // Prevent form submission
    $('#product-search-form').on('submit', function(e) {
        e.preventDefault();
    });

    // Filter: Category
    $(document).on('click', '.filter-category', function(e) {
        e.preventDefault();
        selectedCategory = $(this).data('category');
        selectedTag = ''; // Reset tag selection when category changes
        loadProducts(1, currentSort, selectedCategory, '');
    });

    // Filter: Tag
    $(document).on('click', '.filter-tag', function(e) {
        e.preventDefault();
        selectedTag = $(this).data('tag');
        selectedCategory = ''; // Reset category selection when tag is clicked
        loadProducts(1, currentSort, '', selectedTag);
    });
    
    // Helper function to update URL parameters
    function updateUrlParameter(uri, key, value) {
        // Remove the parameter if value is empty
        if (!value) {
            return removeUrlParameter(uri, key);
        }
        
        var re = new RegExp("([?&])" + key + "=.*?(&|$)", "i");
        var separator = uri.indexOf('?') !== -1 ? "&" : "?";
        
        if (uri.match(re)) {
            return uri.replace(re, '$1' + key + "=" + value + '$2');
        } else {
            return uri + separator + key + "=" + value;
        }
    }
    
    // Helper function to remove URL parameters
    function removeUrlParameter(uri, key) {
        var re = new RegExp("([?&])" + key + "=.*?(&|$)", "i");
        if (uri.match(re)) {
            return uri.replace(re, function(str, p1, p2) {
                return p2 ? p1 : '';
            }).replace(/^\?&/, '?').replace(/[?&]$/, '');
        }
        return uri;
    }
    
    // Add loading styles dynamically
    $('<style>')
        .prop('type', 'text/css')
        .html(`
            .loading-overlay {
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                background: rgba(255, 255, 255, 0.7);
                display: flex;
                justify-content: center;
                align-items: center;
                z-index: 10;
            }
            .loading {
                position: relative;
                min-height: 200px;
            }
            .spinner {
                width: 40px;
                height: 40px;
                border: 4px solid #f3f3f3;
                border-top: 4px solid #3498db;
                border-radius: 50%;
                animation: spin 1s linear infinite;
            }
            @keyframes spin {
                0% { transform: rotate(0deg); }
                100% { transform: rotate(360deg); }
            }
            .filter-category.active,
            .filter-tag.active {
                color: #56853e;
                font-weight: bold;
            }
        `)
        .appendTo('head');

    // Initialize: Parse URL parameters to set initial state
    function getUrlParameter(name) {
        name = name.replace(/[\[]/, '\\[').replace(/[\]]/, '\\]');
        var regex = new RegExp('[\\?&]' + name + '=([^&#]*)');
        var results = regex.exec(location.search);
        return results === null ? '' : decodeURIComponent(results[1].replace(/\+/g, ' '));
    }

    // Set initial values from URL if present
    const urlPage = getUrlParameter('paged');
    const urlSort = getUrlParameter('sort');
    const urlCategory = getUrlParameter('category');
    const urlTag = getUrlParameter('tag');
    const urlSearch = getUrlParameter('search');
    
    if (urlPage) currentPage = parseInt(urlPage);
    if (urlSort) {
        currentSort = urlSort;
        $('#product-sort').val(urlSort);
    }
    if (urlCategory) selectedCategory = urlCategory;
    if (urlTag) selectedTag = urlTag;
    if (urlSearch) {
        searchQuery = urlSearch;
        $('#product-search').val(urlSearch);
    }

    // Initial load
    updateActiveFilters();
    
    // Only load products via AJAX if we have the container present
    if ($('#product-grid-container').length > 0) {
        loadProducts(currentPage, currentSort, selectedCategory, selectedTag, searchQuery);
    }
});