<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="{{ asset('backend/assets/images/logo-icon.png') }}" class="logo-icon" alt="logo icon">
        </div>
        <div>
            <h4 class="logo-text">Admin</h4>
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-back'></i>
        </div>
     </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">

        <li>
            <a href="{{ route('admin.dashboard') }}">
                <div class="parent-icon"><i class='bx bx-home-alt'></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>
        </li>

        <li class="menu-label">UI Elements</li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class='bx bx-cart'></i>
                </div>
                <div class="menu-title">Manage Category</div>
            </a>
            <ul>
                <li> <a href="{{ route('admin.categories.index') }}"><i class='bx bx-radio-circle'></i>All Categories</a>
                </li>
                <li> <a href="{{ route('admin.subcategories.index') }}"><i class='bx bx-radio-circle'></i>All Subcategories</a>
                </li>
                <li> <a href="{{ route('admin.categories.create') }}"><i class='bx bx-radio-circle'></i>Add Category</a>
                </li>
            </ul>
        </li>
        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class='bx bx-bookmark-heart'></i>
                </div>
                <div class="menu-title">Components</div>
            </a>
            <ul>
                <li> <a href="form-elements.html"><i class='bx bx-radio-circle'></i>Form Elements</a>
                </li>
                <li> <a href="form-input-group.html"><i class='bx bx-radio-circle'></i>Input Groups</a>
                </li>
                <li> <a href="form-radios-and-checkboxes.html"><i class='bx bx-radio-circle'></i>Radios & Checkboxes</a>
                </li>
                <li> <a href="form-layouts.html"><i class='bx bx-radio-circle'></i>Forms Layouts</a>
                </li>
                <li> <a href="form-validations.html"><i class='bx bx-radio-circle'></i>Form Validation</a>
                </li>
                <li> <a href="form-wizard.html"><i class='bx bx-radio-circle'></i>Form Wizard</a>
                </li>
                <li> <a href="form-text-editor.html"><i class='bx bx-radio-circle'></i>Text Editor</a>
                </li>
                <li> <a href="form-file-upload.html"><i class='bx bx-radio-circle'></i>File Upload</a>
                </li>
                <li> <a href="form-date-time-pickes.html"><i class='bx bx-radio-circle'></i>Date Pickers</a>
                </li>
                <li> <a href="form-select2.html"><i class='bx bx-radio-circle'></i>Select2</a>
                </li>
                <li> <a href="form-repeater.html"><i class='bx bx-radio-circle'></i>Form Repeater</a>
                </li>
            </ul>
        </li>
        <li>
            <ul>
                <li> <a href="table-basic-table.html"><i class='bx bx-radio-circle'></i>Basic Table</a>
                </li>
                <li> <a href="table-datatable.html"><i class='bx bx-radio-circle'></i>Data Table</a>
                </li>
            </ul>
        </li>
        <li class="menu-label">Charts & Maps</li>
        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="bx bx-line-chart"></i>
                </div>
                <div class="menu-title">Charts</div>
            </a>
            <ul>
                <li> <a href="charts-apex-chart.html"><i class='bx bx-radio-circle'></i>Apex</a>
                </li>
                <li> <a href="charts-chartjs.html"><i class='bx bx-radio-circle'></i>Chartjs</a>
                </li>
                <li> <a href="charts-highcharts.html"><i class='bx bx-radio-circle'></i>Highcharts</a>
                </li>
            </ul>
        </li>
        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="bx bx-map-alt"></i>
                </div>
                <div class="menu-title">Maps</div>
            </a>
            <ul>
                <li> <a href="map-google-maps.html"><i class='bx bx-radio-circle'></i>Google Maps</a>
                </li>
                <li> <a href="map-vector-maps.html"><i class='bx bx-radio-circle'></i>Vector Maps</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="https://themeforest.net/user/codervent" target="_blank">
                <div class="parent-icon"><i class="bx bx-support"></i>
                </div>
                <div class="menu-title">Support</div>
            </a>
        </li>
    </ul>
    <!--end navigation-->
</div>