var app = angular.module('trendyphone', [])
                 .constant("CSRF_TOKEN", '{{ csrf_token() }}')
                 .constant('BASE_URL', 'http://localhost:8000/');

