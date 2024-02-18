{{-- <script type="text/javascript" src="{{ asset('BhandaraKaro/NewHome/public/vendor/jquery/jquery.min.js') }}"></script> --}}
<script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
<script type="text/javascript"
    src="{{ asset('BhandaraKaro/NewHome/public/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('BhandaraKaro/NewHome/public/vendor/slick/slick/slick.min.js') }}">
</script>
<script type="text/javascript" src="{{ asset('BhandaraKaro/NewHome/public/vendor/sidebar/hc-offcanvas-nav.js') }}">
</script>
<script src="https://ajax.aspnetcdn.com/ajax/jquery.ui/1.10.4/jquery-ui.min.js"></script>
<script type="text/javascript" src="{{ asset('BhandaraKaro/NewHome/public/js/osahan.js') }}"></script>
<script src="{{ asset('BhandaraKaro/NewHome/public/main/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js') }}">
</script>
<script src="https://static.cloudflareinsights.com/beacon.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

{{-- <script>
    $(document).ready(function() {
        // Assuming you have a radio button with class 'locationRadio' for each location
        $('.locationRadio').change(function() {
            var selectedLocation = $("input[name='location']:checked").siblings('label').text();
            $('#selectedLocation').text(selectedLocation);
        });
    });
</script> --}}
{{-- <script>
    $(document).ready(function() {
        $('#location').on('input', function() {
            var query = $(this).val();

            if (query.length >= 3) {
                $.ajax({
                    url: '/search-location',
                    method: 'GET',
                    data: {
                        query: query
                    },
                    success: function(data) {
                        displayResults(data);
                    }
                });
            } else {
                $('#suggestionResults').html('');
            }
        });

        function displayResults(data) {
            var results = $('#suggestionResults');
            results.empty();

            if (data.length === 0) {
                results.append('<p>No results found.</p>');
            } else {
                results.append('<ul>');

                $.each(data, function(key, location) {
                    results.append('<li>' + location.district + ', ' + location.state_name + ', ' +
                        location.pincode + '</li>');
                });

                results.append('</ul>');
            }
        }
    });
</script> --}}
<script>
    // Handle location selection
    $(document).on('click', '.location-suggestion', function() {
        var selectedLocation = $(this).data('location');
        $('#selectedLocation').text(selectedLocation);
        // Close the dropdown if needed
        $('.dropdown-toggle').dropdown('toggle');
    });

    // Perform AJAX search on input change
    $('#location').on('input', function() {
        var query = $(this).val();
        if (query.length > 2) {
            // Perform AJAX call to fetch suggestions
            $.ajax({
                type: 'GET',
                url: '{{ route('search.location') }}',
                data: {
                    query: query
                },
                success: function(data) {
                    // Display suggestions
                    var results = '';
                    $.each(data, function(index, location) {
                        results += '<div class="location-suggestion" data-location="' +
                            location.state_name + ', ' + location.district + ' - ' +
                            location
                            .pincode + '">' +
                            location.state_name + ', ' + location.district + ' - ' +
                            location.pincode +
                            '</div>';
                    });
                    $('#suggestionResults').html(results);
                }
            });
        } else {
            // Clear suggestions if input is less than 3 characters
            $('#suggestionResults').empty();
        }
    });
</script>
<script>
    function updateCartCount() {
        // AJAX request to get the latest cart count
        $.get("{{ route('get.cart.count') }}", function(data) {
            // Update the cart count badge
            $('#cart-count-badge').text(data.cartCount);
        });
    }

    // Call the function to update cart count initially
    updateCartCount();

    // You can call this function after adding a product to update the cart count
    // For example, you can call it after a successful AJAX request in your addProduct function
    // updateCartCount();
</script>
