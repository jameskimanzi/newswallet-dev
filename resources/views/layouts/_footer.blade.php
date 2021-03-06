<footer class="container-fluid border-top">
    <div class="row purple-text text-darken-4 footer">
        <div class="col-sm-2 text-center">Proudly powered by
            <a href="https://github.com/jameskimanzi/news-wallet" target="_blank">News-Wallet</a>
        </div>
        <div class="col-sm-2 text-center">© {{date('Y').' '.$globalConfigs->copyright_owner}} </div>
        @if(!auth()->check())
            
            <div class="col-sm-1 col-sm-offset-5 text-center">
                <a href="{{route('login-form')}}" class="text-grey">Manage</a>
            </div>
        @endif
    </div>

    @include("layouts._modal_subscribe_form")
    @include("layouts._modal_feedback_form")
</footer>
</div>
<script src="{{ mix("build/js/app.js") }}" type="application/javascript"></script>
@yield('inPageJS')
</body>
</html>