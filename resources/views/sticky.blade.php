    <div class="row" data-sticky-container>
        <div class="medium-2 columns">
            <img src="http://placehold.it/250x250" class="sticky" data-margin-top="20" data-sticky-for="1023" data-sticky-class="is-sticky">
        </div>
        <div class="medium-8 columns">
            <h1>Sticky-js</h1>
            <p>Lorem ipsum.....</p>
        </div>
        <div class="medium-2 columns">
            <img src="http://placehold.it/250x250" class="sticky" data-margin-top="20" data-sticky-for="1023" data-sticky-class="is-sticky">
        </div>
    </div>
    @section('after-script')
        <script src="sticky.min.js"></script>
        <script>
            var sticky = new Sticky('.sticky');
        </script>
        @endsection
