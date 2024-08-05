<?php include ("./include_bootstrap/main-contents-header.php"); ?>

<nav class="navbar navbar-expand-sm bg-body-tertiary nav-bar-color">
    <div class="container-fluid">
        <div class="row w-100 justify-content-between">
            <div class="col d-flex align-items-center">
                <img src="./assets/icons/home-1-svgrepo-com.svg" alt="Home Icon" height="25px" width="25px">
                <a class="navbar-brand fs-6 ms-2" href="#">Home</a>
                <button class="navbar-toggler ms-2" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="col d-flex justify-content-center">
                <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                    <form class="d-flex w-100" role="search">
                        <div class="input-group input-group-sm">
                            <input class="form-control" type="search" placeholder="Search" aria-label="Search"
                                aria-describedby="basic-addon1">
                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-search"></i></span>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col d-flex justify-content-end align-items-center">
                <div class="collapse navbar-collapse justify-content-end" id="navbarNavDarkDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <button class="btn btn-transparent dropdown-toggle" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Person's Name
                            </button>
                            <ul class="dropdown-menu dropdown-menu-dark">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="ms-3">
                    <div class="circle">
                        <img src="https://letsenhance.io/static/8f5e523ee6b2479e26ecc91b9c25261e/1015f/MainAfter.jpg"
                            alt="Sample Image" class="img-fluid rounded-circle" style="width: 40px; height: 40px;">
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>

<div class="d-flex align-items-start">
    <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
        <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home"
            type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Home</button>
        <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile"
            type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Profile</button>
        <button class="nav-link" id="v-pills-disabled-tab" data-bs-toggle="pill" data-bs-target="#v-pills-disabled"
            type="button" role="tab" aria-controls="v-pills-disabled" aria-selected="false" disabled>Disabled</button>
        <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages"
            type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</button>
        <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings"
            type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</button>
    </div>
    <div class="tab-content" id="v-pills-tabContent">
        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab"
            tabindex="0">...</div>
        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab"
            tabindex="0">...</div>
        <div class="tab-pane fade" id="v-pills-disabled" role="tabpanel" aria-labelledby="v-pills-disabled-tab"
            tabindex="0">...</div>
        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab"
            tabindex="0">...</div>
        <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab"
            tabindex="0">...</div>
    </div>
</div>





<?php include ("./include_bootstrap/main-contents-footer.php"); ?>