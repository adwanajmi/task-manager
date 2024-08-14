<div class="sidebar">
    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="#" class="simple-text logo-mini">{{ __("AN") }}</a>
            <a href="#" class="simple-text logo-normal">{{ __("Assesment - Adwa") }}</a>
        </div>
        <ul class="nav">
            <li @if ($pageSlug == "dashboard") class="active " @endif>
                <a href="{{ route("home") }}">
                    <i class="tim-icons icon-chart-pie-36"></i>
                    <p>{{ __("Dashboard") }}</p>
                </a>
            </li>
            <li>
                <a data-toggle="collapse" href="#laravel-examples" aria-expanded="true">
                    <i class="tim-icons icon-istanbul"></i>
                    <span class="nav-link-text">{{ __("Task Assesment") }}</span>
                    <b class="caret mt-1"></b>
                </a>

                <div class="collapse show" id="laravel-examples">
                    <ul class="nav pl-4">
                        <li @if ($pageSlug == "tasks") class="active " @endif>
                            <a href="{{ route("tasks.index") }}">
                                <i class="tim-icons icon-bullet-list-67"></i>
                                <p>{{ __("Task List") }}</p>
                            </a>
                        </li>
                        <li @if ($pageSlug == "profile") class="active " @endif>
                            <a href="{{ route("profile.edit") }}">
                                <i class="tim-icons icon-single-02"></i>
                                <p>{{ __("User Profile") }}</p>
                            </a>
                        </li>

                    </ul>
                </div>
            </li>
        </ul>
    </div>
</div>
