<div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <a class="nav-link" href="view-register.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                                Registered Users
                            </a>

                            

                            <!--- Faculty -->
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseFaculty" aria-expanded="false" aria-controls="collapseFaculty">
                                <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                                Faculty
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseFaculty" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="faculty-add.php">Add Faculty</a>
                                    <a class="nav-link" href="faculty-view.php">View Faculty</a>
                                </nav>
                            </div>

                            <!--- Partners -->
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePartners" aria-expanded="false" aria-controls="collapsePartners">
                                <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                                Partners
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePartners" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="partner-add.php">Add Partners</a>
                                    <a class="nav-link" href="partner-view.php">View Partners</a>
                                </nav>
                            </div>


                            <div class="sb-sidenav-menu-heading">Interface</div>
                           
                             <!--- Articles Interface -->
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseArticles" aria-expanded="false" aria-controls="collapseArticles">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Articles
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseArticles" aria-labelledby="Articles" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="article-add.php">Add Article</a>
                                    <a class="nav-link" href="article-view.php">View Articles</a>
                                </nav>
                            </div>

                            <!--- Galleries Interface -->
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseGalleries" aria-expanded="false" aria-controls="collapseGalleries">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Gallery
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseGalleries" aria-labelledby="Galleries" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="gallery-add.php">Add Gallery</a>
                                    <a class="nav-link" href="gallery-view.php">View Galleries</a>
                                </nav>
                            </div>

                             <!--- Project Interface -->
                             <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseProjects" aria-expanded="false" aria-controls="collapseProjects">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Projects
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseProjects" aria-labelledby="Projects" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="project-add.php">Add Project</a>
                                    <a class="nav-link" href="project-view.php">View Project</a>
                                </nav>
                            </div>

                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseColleges" aria-expanded="false" aria-controls="collapseColleges">
                                <div class="sb-nav-link-icon"><i class="fas fa-school"></i></div>
                                School
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseColleges" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseColleges" aria-expanded="false" aria-controls="pagesCollapseColleges">
                                        Colleges
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseColleges" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="college-add.php">Add Colleges</a>
                                            <a class="nav-link" href="college-view.php">View Colleges</a>
                                        </nav>
                                    </div>

                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseDepartments" aria-expanded="false" aria-controls="pagesCollapseDepartments">
                                        Departments
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseDepartments" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="department-add.php">Add Departments</a>
                                            <a class="nav-link" href="department-view.php">View Departments</a>
                                        </nav>
                                    </div>

                                    <a class="nav-link" href="school_year-view.php">
                                        <div class="sb-nav-link-icon"><i class="fas fa-calendar"></i></div>
                                        School Years
                                    </a>
                                </nav>
                            </div>
                          
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        <?php if(isset($_SESSION['auth_user'])) : ?>

                        <a class="small" style="color:white;letter-spacing:3px" aria-expanded="false">
                            <?= $_SESSION['auth_user']['user_name']; ?>
                        </a>

                        <a class="small" href="../index.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-home"></i>Return to Front Page</div>
                           
                        </a>
                           
                            

                       

                        <?php endif; ?>
                    </div>
                </nav>
            </div>