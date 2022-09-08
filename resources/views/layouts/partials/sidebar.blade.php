<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile"> <a href="/" class="nav-link">
                <div class="profile-image"> <img class="img-xs rounded-circle" src="{{ asset((!empty(Auth::user()->image) && file_exists(Auth::user()->image)?Auth::user()->image : 'assets/images/avatar.png')) }}" alt="profile image">
                    <div class="dot-indicator bg-success"></div>
                </div>
                <div class="text-wrapper">
                    <p class="profile-name capitalize">{{ Auth::user()->name }}</p>
                    <p class="designation">{{ ucfirst(Auth::user()->role) }}</p>
                </div>
            </a> </li>


        @if(session()->has('module'))
            <!-- Start For module-1 -->
            @if(session()->get('module') == '1')
                <span style="padding: 0 1.75rem;" class="nav-link">
                    <span class="menu-title">Archiving Panel</span>
                </span>
                @if(auth()->user()->can('isSuperAdmin') || auth()->user()->can('isAdmin')  )
                <li class="nav-item {{(request()->segment(1) == 'user') ? 'active' : '' }}">
                    <a class="nav-link"  href="{{ route('user.index') }}" >
                        <span class="menu-title2">User Management</span>
                        <i class="icon-layers menu-icon"></i>
                    </a>
                </li>
                @endif

                @if(auth()->user()->can('isSuperAdmin') || auth()->user()->can('isAdmin')  )
                <li class="nav-item {{in_array(request()->segment(1), ['program', 'thematic', 'donor', 'support', 'document-type']) ? 'active' : '' }}">
                    <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                        <span class="menu-title2">Program Profile</span>
                        <i class="icon-layers menu-icon"></i>
                    </a>
                    <div class="collapse {{in_array(request()->segment(1), ['program', 'thematic', 'donor', 'support', 'document-type']) ? 'show' : '' }}" id="ui-basic">
                        <div>
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link {{(request()->segment(1) == 'program') ? 'active' : '' }}" href="{{ route('program.index') }}">Program Profile</a></li>
                                <li class="nav-item"> <a class="nav-link {{(request()->segment(1) == 'thematic') ? 'active' : '' }}" href="{{ route('thematic.index') }}">Thematic Area</a></li>
                                <li class="nav-item"> <a class="nav-link {{(request()->segment(1) == 'donor') ? 'active' : '' }}" href="{{ route('donor.index') }}">Donor Profile</a></li>
        {{--                        <li class="nav-item"> <a class="nav-link {{(request()->segment(1) == 'support') ? 'active' : '' }}" href="{{ route('support.index') }}">Support Function</a></li>--}}
                                <li class="nav-item"> <a class="nav-link {{(request()->segment(1) == 'document-type') ? 'active' : '' }}" href="{{ route('document-type.index') }}">Document Type</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
                @endif

                @if(auth()->user()->can('isRegistered') || auth()->user()->can('isAdmin')  )
                <li class="nav-item {{(request()->segment(1) == 'archive') ? 'active' : '' }}">
                    <a class="nav-link" data-toggle="collapse" href="#ui-basic2" aria-expanded="false" aria-controls="ui-basic2">
                        <span class="menu-title2">Upload Section</span>
                        <i class="icon-layers menu-icon"></i>
                    </a>
                    <div class="collapse {{(request()->segment(1) == 'archive')  ? 'show' : '' }}" id="ui-basic2">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link {{ (request()->is('archive/study*')) ? 'active' : '' }}" href="{{ route('archive.study.create') }}">Study Archive</a></li>
                            <li class="nav-item"> <a class="nav-link {{ (request()->is('archive/document*')) ? 'active' : '' }}" href="{{ route('archive.document.create') }}">Document Archive</a></li>
                            <li class="nav-item"> <a class="nav-link {{ (request()->is('archive/learning-action*')) ? 'active' : '' }}" href="{{ route('archive.learning-action.create') }}">Learning &amp; Action Archive</a></li>
                        </ul>
                    </div>
                </li>
                @endif

                @if(auth()->user()->can('isSuperAdmin') || auth()->user()->can('isAdmin') || auth()->user()->can('isSupervisor') || auth()->user()->can('isRegistered')  )
                <li class="nav-item {{(request()->segment(1) == 'report') ? 'active' : '' }}">
                    <a class="nav-link" data-toggle="collapse" href=".ui-basic3" aria-expanded="false" aria-controls="ui-basic3">
                        <span class="menu-title2">View Archive</span>
                        <i class="icon-layers menu-icon"></i>
                    </a>
                    <div class="collapse ui-basic3 {{(request()->segment(1) == 'report') ? 'show' : '' }}">
                        <a class="nav-link" data-toggle="collapse" href="#ui-basic-sub" aria-expanded="false" aria-controls="ui-basic-sub">
                            <span class="menu-title2">
                                <i class="icon-layers icon-drawer"></i>
                                Monitoring Studies
                            </span>
                        </a>
                    </div>
                    <div class="collapse {{(request()->segment(2) == 'monitoring-studies') ? 'show' : '' }}" id="ui-basic-sub">
                        <ul class="nav flex-column sub-menu">
                            <li class=""> <a class="nav-link" href="#">BRAC</a></li>
        {{--                    <li class="nav-item"> <a class="nav-link {{ (request()->routeIs('report.monitoring-studies.brac.recent-year')) ? 'active' : '' }}" href="{{ route('report.monitoring-studies.brac.recent-year') }}">Recent Year</a></li>--}}
                            <li class="nav-item"> <a class="nav-link {{ (request()->routeIs('report.monitoring-studies.brac.thematic-area-name')) ? 'active' : '' }}" href="{{ route('report.monitoring-studies.brac.thematic-area-name') }}">Thematic Area Name</a></li>

                            <li class=""> <a class="nav-link" href="#">Development Programs</a></li>
                            <li class="nav-item"> <a class="nav-link {{ (request()->routeIs('report.monitoring-studies.development-programs.program-list')) ? 'active' : '' }}" href="{{ route('report.monitoring-studies.development-programs.program-list') }}">Program List</a></li>
                            <li class="nav-item"> <a class="nav-link {{ (request()->routeIs('report.monitoring-studies.development-programs.cross-program-list')) ? 'active' : '' }}" href="{{ route('report.monitoring-studies.development-programs.cross-program-list') }}">Cross Program List</a></li>
        {{--                    <li class="nav-item"> <a class="nav-link {{ (request()->routeIs('report.monitoring-studies.development-programs.development-program')) ? 'active' : '' }}" href="{{ route('report.monitoring-studies.development-programs.development-program') }}">Development Program</a></li>--}}
        {{--                    <li class="nav-item"> <a class="nav-link {{ (request()->routeIs('report.monitoring-studies.development-programs.cross-program-name')) ? 'active' : '' }}" href="{{ route('report.monitoring-studies.development-programs.cross-program-name') }}">Cross Program Name</a></li>--}}

        {{--                    <li class=""> <a class="nav-link" href="#">Support Functions</a></li>--}}
        {{--                    <li class="nav-item"> <a class="nav-link {{ (request()->routeIs('report.monitoring-studies.support-function.recent-year-report')) ? 'active' : '' }}" href="{{ route('report.monitoring-studies.support-function.recent-year-report') }}">Recent Year Report</a></li>--}}
        {{--                    <li class="nav-item"> <a class="nav-link {{ (request()->routeIs('report.monitoring-studies.support-function.cross-function-list')) ? 'active' : '' }}" href="{{ route('report.monitoring-studies.support-function.cross-function-list') }}">Cross Function List</a></li>--}}
        {{--                    <li class="nav-item"> <a class="nav-link {{ (request()->routeIs('report.monitoring-studies.support-function.support-function-name')) ? 'active' : '' }}" href="{{ route('report.monitoring-studies.support-function.support-function-name') }}">Support Function Name</a></li>--}}
        {{--                    <li class="nav-item"> <a class="nav-link {{ (request()->routeIs('report.monitoring-studies.support-function.support-function-list')) ? 'active' : '' }}" href="{{ route('report.monitoring-studies.support-function.support-function-list') }}">Support Function List</a></li>--}}
        {{--                    <li class="nav-item"> <a class="nav-link {{ (request()->routeIs('report.monitoring-studies.support-function.cross-function-name')) ? 'active' : '' }}" href="{{ route('report.monitoring-studies.support-function.cross-function-name') }}">Cross Functions Name</a></li>--}}
                        </ul>
                    </div>


                    <div class="collapse ui-basic3 {{(request()->segment(1) == 'report') ? 'show' : '' }}">
                        <a class="nav-link" data-toggle="collapse" href="#ui-basic-sub-2" aria-expanded="false" aria-controls="ui-basic-sub-2">
                            <span class="menu-title2">
                                <i class="icon-layers icon-drawer"></i> Documents
                            </span>
                        </a>
                    </div>
                    <div class="collapse {{(request()->segment(2) == 'documents') ? 'show' : '' }}" id="ui-basic-sub-2">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link {{ (request()->routeIs('report.documents.document-type')) ? 'active' : '' }}" href="{{ route('report.documents.document-type') }}">Document Type</a></li>
                            <li class="nav-item"> <a class="nav-link {{ (request()->routeIs('report.documents.document-program-list')) ? 'active' : '' }}" href="{{ route('report.documents.document-program-list') }}">Document Program List</a></li>
        {{--                    <li class="nav-item"> <a class="nav-link {{ (request()->routeIs('report.documents.document-program-name')) ? 'active' : '' }}" href="{{ route('report.documents.document-program-name') }}">Document Program Name</a></li>--}}
        {{--                    <li class="nav-item"> <a class="nav-link {{ (request()->routeIs('report.documents.document-type-name')) ? 'active' : '' }}" href="{{ route('report.documents.document-type-name') }}">Document Type Name</a></li>--}}
                        </ul>
                    </div>


                    <div class="collapse ui-basic3 {{(request()->segment(1) == 'report') ? 'show' : '' }}">
                        <a class="nav-link" data-toggle="collapse" href="#ui-basic-sub-3" aria-expanded="false" aria-controls="ui-basic-sub-3">
                            <span class="menu-title2">
                                <i class="icon-layers icon-drawer"></i> Learning &amp; Actions
                            </span>
                        </a>
                    </div>
                    <div class="collapse {{(request()->segment(2) == 'learning-actions') ? 'show' : '' }}" id="ui-basic-sub-3">
                        <ul class="nav flex-column sub-menu">
        {{--                    <li class="nav-item"> <a class="nav-link {{ (request()->routeIs('report.learning-actions.program-type')) ? 'active' : '' }}" href="{{ route('report.learning-actions.program-type') }}">Program Type</a></li>--}}
                            <li class="nav-item"> <a class="nav-link {{ (request()->routeIs('report.learning-actions.program-list')) ? 'active' : '' }}" href="{{ route('report.learning-actions.program-list') }}">Program List</a></li>
        {{--                    <li class="nav-item"> <a class="nav-link {{ (request()->routeIs('report.learning-actions.recent-year')) ? 'active' : '' }}" href="{{ route('report.learning-actions.recent-year') }}">Recent Year</a></li>--}}
                        </ul>
                    </div>

                    <div class="collapse ui-basic3 {{(request()->segment(1) == 'report') ? 'show' : '' }}">
                        <a class="nav-link"   href="{{ route('report.all_type_document') }}"  >
                            <span class="menu-title2">
                                <i class="icon-layers icon-drawer"></i>
                                View Archive List
                            </span>
                        </a>
                    </div>
                </li>
                @endif
                    {{--<li class="nav-item {{(request()->segment(1) == 'all-type-document') ? 'active' : '' }}">
                        <a class="nav-link"  href="{{ url('all-type-document') }}" >
                            <span class="menu-title2">View Archive List</span>
                            <i class="icon-layers menu-icon"></i>
                        </a>
                    </li>--}}
            @endif
            <!-- Start For module-1 -->


            <!-- Start For module-2 -->
            @if(session()->get('module') == '2')
                    <li class="nav-item pro-upgrade">
                        <div class="mod-hed">Module 02</div>
                    </li>
                @if(auth()->user()->can('isSuperAdmin') || auth()->user()->can('isAdmin')  )


{{--                        <li class="nav-item {{ (request()->is('module-2/framework-establishment/*')) ? 'active' : '' }}">--}}
                        <li class="nav-item {{(request()->segment(1) == 'module-2' && request()->segment(2) == 'framework-establishment')  ? 'active' : '' }}">
                        <a class="nav-link " href="{{ route('framework-establishment.create') }}">
                                <span class="menu-title2">Framework Establishment</span>
                            </a>
                        </li>

{{--                        <li class="nav-item {{ (request()->is('module-2/relevant-sdg-establishment/*')) ? 'active' : '' }}">--}}
                        <li class="nav-item {{(request()->segment(1) == 'module-2' && request()->segment(2) == 'relevant-sdg-establishment')  ? 'active' : '' }}">
                        <a class="nav-link " href="{{ route('relevant-sdg-establishment.create') }}">
                                <span class="menu-title2">Relevant SDG Establishment</span>
                            </a>
                        </li>

{{--                        <li class="nav-item {{ (request()->is('module-2/indicator-registration/*')) ? 'active' : '' }}">--}}
                        <li class="nav-item {{(request()->segment(1) == 'module-2' && request()->segment(2) == 'indicator-registration')  ? 'active' : '' }}">
                        <a class="nav-link " href="{{ route('indicator-registration.create') }}">
                                <span class="menu-title2">Indicator Registration</span>
                            </a>
                        </li>

{{--                        <li class="nav-item {{ (request()->is('module-2/result-entry/*')) ? 'active' : '' }}">--}}
                        <li class="nav-item {{(request()->segment(1) == 'module-2' && request()->segment(2) == 'result-entry')  ? 'active' : '' }}">
                            <a class="nav-link " href="{{ route('result-entry.create') }}">
                                <span class="menu-title2">Result Entry</span>
                            </a>
                        </li>

                        <li class="nav-item  {{(request()->segment(1) == 'module-2' && request()->segment(2) == 'reports')  ? 'active' : '' }}">
                            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                                <span class="menu-title2">Reports</span>
                            </a>
                            <div class="collapse {{in_array(request()->segment(3), ['sdg-report', 'spa-report']) ? 'show' : '' }}" id="ui-basic">
                                <div>
                                    <ul class="nav flex-column sub-menu">
                                        <li class="nav-item">
                                            <a class="nav-link {{(request()->segment(3) == 'sdg-report') ? 'active' : '' }}" href="{{ route('sdg-report.index') }}">SDG Report</a>
                                            <a class="nav-link {{(request()->segment(3) == 'spa-report') ? 'active' : '' }}" href="{{ route('spa-report.index') }}">SPA Report</a>
                                            <a class="nav-link {{(request()->segment(3) == 'spa-report') ? 'active' : '' }}" href="{{ route('excel-report.index') }}">Program Report</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                @endif

                    @if(auth()->user()->can('isRegistered')  )
                        <li class="nav-item {{(request()->segment(1) == 'module-2' && request()->segment(2) == 'result-entry')  ? 'active' : '' }}">
                            <a class="nav-link " href="{{ route('result-entry.create') }}">
                                <span class="menu-title2">Result Entry</span>
                            </a>
                        </li>
                    @endif

            @endif
            <!-- Start For module-2 -->

                @if(session()->has('module'))
                    @if(session()->get('module') != '1')
                        <li class="nav-item pro-upgrade">
                            <div class="mod-btn"><a href="{{route('module', '1')}}">Module 01</a></div>
                        </li>
                    @endif

                    @if(session()->get('module') != '2')
                        <li class="nav-item pro-upgrade">
                            <div class="mod-btn"><a href="{{route('module', '2')}}">Module 02</a></div>
                        </li>
                    @endif

                    @if(session()->get('module') != '3')
                        <li class="nav-item pro-upgrade">
                            <div class="mod-btn"><a href="{{route('module', '3')}}">Module 03</a></div>
                        </li>
                    @endif
                @endif

        @endif
    </ul>
</nav>
