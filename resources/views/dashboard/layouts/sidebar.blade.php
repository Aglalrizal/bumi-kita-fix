<div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary">
    <div class="offcanvas-md offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu"
        aria-labelledby="sidebarMenuLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="sidebarMenuLabel">Bumi Kita</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                data-bs-target="#sidebarMenu" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-2 overflow-y-auto">
            <ul class="nav flex-column border-bottom">
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2" href="/dashboard">
                        <svg class="bi">
                            <use xlink:href="#house-fill" /></svg>
                        Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2" href="/dashboard/posts">
                        <svg class="bi">
                            <use xlink:href="#file-earmark-text" /></svg>
                        Campaigns
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2" href="/dashboard/campaigns">
                        <svg class="bi">
                            <use xlink:href="#file-earmark-text" /></svg>
                        Kampanye
                    </a>
                </li>
            </ul>
            <ul class="nav flex-column mb-auto">
                <li class="nav-item p-2">
                    <form action="/logout" method="post" class="d-grid">
                        @csrf
                        <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Are you sure?')"><i class="bi bi-box-arrow-right"></i>
                            Logout</button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</div>
