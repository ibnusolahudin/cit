<?php

/* BCoreAdminBundle::layout.html.twig */
class __TwigTemplate_3446c725e1a2144c536524971e806463d4d42d0e8fac6a5b32e971f7c22d5755 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("BCoreAdminBundle::base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'nav_top_block' => array($this, 'block_nav_top_block'),
            'nav_left_block' => array($this, 'block_nav_left_block'),
            'page_wrapper' => array($this, 'block_page_wrapper'),
            'page_title' => array($this, 'block_page_title'),
            'content_top' => array($this, 'block_content_top'),
            'content_main' => array($this, 'block_content_main'),
            'content_right' => array($this, 'block_content_right'),
            'item_right' => array($this, 'block_item_right'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BCoreAdminBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <!-- HEADER SECTION -->
        <div id=\"top\">
            ";
        // line 6
        $this->displayBlock('nav_top_block', $context, $blocks);
        // line 255
        echo "
        </div>
        <!-- END HEADER SECTION -->



        <!-- MENU SECTION -->
        ";
        // line 262
        $this->displayBlock('nav_left_block', $context, $blocks);
        // line 495
        echo "        <!--END MENU SECTION -->



        <!--PAGE CONTENT -->
        ";
        // line 500
        $this->displayBlock('page_wrapper', $context, $blocks);
        // line 1103
        echo "        <!--END PAGE CONTENT -->

         <!-- RIGHT STRIP  SECTION -->
         ";
        // line 1106
        $this->displayBlock('content_right', $context, $blocks);
        // line 1154
        echo "         <!-- END RIGHT STRIP  SECTION -->
";
    }

    // line 6
    public function block_nav_top_block($context, array $blocks = array())
    {
        // line 7
        echo "            <nav class=\"navbar navbar-inverse navbar-fixed-top \" style=\"padding-top: 10px;\">
                <a data-original-title=\"Show/Hide Menu\" data-placement=\"bottom\" data-tooltip=\"tooltip\" class=\"accordion-toggle btn btn-primary btn-sm visible-xs\" data-toggle=\"collapse\" href=\"#menu\" id=\"menu-toggle\">
                    <i class=\"icon-align-justify\"></i>
                </a>
                <!-- LOGO SECTION -->
                <header class=\"navbar-header\">

                    <a href=\"index.html\" class=\"navbar-brand\">
                    <img src=\"";
        // line 15
        echo twig_escape_filter($this->env, strtr($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uriForPath", array(0 => "/assets/img/logo.png"), "method"), array("/app_dev.php" => "")), "html", null, true);
        echo "\" alt=\"\" />
                        
                        </a>
                </header>
                <!-- END LOGO SECTION -->
                <ul class=\"nav navbar-top-links navbar-right\">

                    <!-- MESSAGES SECTION -->
                    <li class=\"dropdown\">
                        <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                            <span class=\"label label-success\">2</span>    <i class=\"icon-envelope-alt\"></i>&nbsp; <i class=\"icon-chevron-down\"></i>
                        </a>

                        <ul class=\"dropdown-menu dropdown-messages\">
                            <li>
                                <a href=\"#\">
                                    <div>
                                       <strong>John Smith</strong>
                                        <span class=\"pull-right text-muted\">
                                            <em>Today</em>
                                        </span>
                                    </div>
                                    <div>Lorem ipsum dolor sit amet, consectetur adipiscing.
                                        <br />
                                        <span class=\"label label-primary\">Important</span> 

                                    </div>
                                </a>
                            </li>
                            <li class=\"divider\"></li>
                            <li>
                                <a href=\"#\">
                                    <div>
                                        <strong>Raphel Jonson</strong>
                                        <span class=\"pull-right text-muted\">
                                            <em>Yesterday</em>
                                        </span>
                                    </div>
                                    <div>Lorem ipsum dolor sit amet, consectetur adipiscing.
                                         <br />
                                        <span class=\"label label-success\"> Moderate </span> 
                                    </div>
                                </a>
                            </li>
                            <li class=\"divider\"></li>
                            <li>
                                <a href=\"#\">
                                    <div>
                                        <strong>Chi Ley Suk</strong>
                                        <span class=\"pull-right text-muted\">
                                            <em>26 Jan 2014</em>
                                        </span>
                                    </div>
                                    <div>Lorem ipsum dolor sit amet, consectetur adipiscing.
                                         <br />
                                        <span class=\"label label-danger\"> Low </span> 
                                    </div>
                                </a>
                            </li>
                            <li class=\"divider\"></li>
                            <li>
                                <a class=\"text-center\" href=\"#\">
                                    <strong>Read All Messages</strong>
                                    <i class=\"icon-angle-right\"></i>
                                </a>
                            </li>
                        </ul>

                    </li>
                    <!--END MESSAGES SECTION -->

                    <!--TASK SECTION -->
                    <li class=\"dropdown\">
                        <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                            <span class=\"label label-danger\">5</span>   <i class=\"icon-tasks\"></i>&nbsp; <i class=\"icon-chevron-down\"></i>
                        </a>

                        <ul class=\"dropdown-menu dropdown-tasks\">
                            <li>
                                <a href=\"#\">
                                    <div>
                                        <p>
                                            <strong> Profile </strong>
                                            <span class=\"pull-right text-muted\">40% Complete</span>
                                        </p>
                                        <div class=\"progress progress-striped active\">
                                            <div class=\"progress-bar progress-bar-success\" role=\"progressbar\" aria-valuenow=\"40\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 40%\">
                                                <span class=\"sr-only\">40% Complete (success)</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"divider\"></li>
                            <li>
                                <a href=\"#\">
                                    <div>
                                        <p>
                                            <strong> Pending Tasks </strong>
                                            <span class=\"pull-right text-muted\">20% Complete</span>
                                        </p>
                                        <div class=\"progress progress-striped active\">
                                            <div class=\"progress-bar progress-bar-info\" role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 20%\">
                                                <span class=\"sr-only\">20% Complete</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"divider\"></li>
                            <li>
                                <a href=\"#\">
                                    <div>
                                        <p>
                                            <strong> Work Completed </strong>
                                            <span class=\"pull-right text-muted\">60% Complete</span>
                                        </p>
                                        <div class=\"progress progress-striped active\">
                                            <div class=\"progress-bar progress-bar-warning\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 60%\">
                                                <span class=\"sr-only\">60% Complete (warning)</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"divider\"></li>
                            <li>
                                <a href=\"#\">
                                    <div>
                                        <p>
                                            <strong> Summary </strong>
                                            <span class=\"pull-right text-muted\">80% Complete</span>
                                        </p>
                                        <div class=\"progress progress-striped active\">
                                            <div class=\"progress-bar progress-bar-danger\" role=\"progressbar\" aria-valuenow=\"80\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 80%\">
                                                <span class=\"sr-only\">80% Complete (danger)</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"divider\"></li>
                            <li>
                                <a class=\"text-center\" href=\"#\">
                                    <strong>See All Tasks</strong>
                                    <i class=\"icon-angle-right\"></i>
                                </a>
                            </li>
                        </ul>

                    </li>
                    <!--END TASK SECTION -->

                    <!--ALERTS SECTION -->
                    <li class=\"chat-panel dropdown\">
                        <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                            <span class=\"label label-info\">8</span>   <i class=\"icon-comments\"></i>&nbsp; <i class=\"icon-chevron-down\"></i>
                        </a>

                        <ul class=\"dropdown-menu dropdown-alerts\">

                            <li>
                                <a href=\"#\">
                                    <div>
                                        <i class=\"icon-comment\" ></i> New Comment
                                    <span class=\"pull-right text-muted small\"> 4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class=\"divider\"></li>
                            <li>
                                <a href=\"#\">
                                    <div>
                                        <i class=\"icon-twitter info\"></i> 3 New Follower
                                    <span class=\"pull-right text-muted small\"> 9 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class=\"divider\"></li>
                            <li>
                                <a href=\"#\">
                                    <div>
                                        <i class=\"icon-envelope\"></i> Message Sent
                                    <span class=\"pull-right text-muted small\" > 20 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class=\"divider\"></li>
                            <li>
                                <a href=\"#\">
                                    <div>
                                        <i class=\"icon-tasks\"></i> New Task
                                    <span class=\"pull-right text-muted small\"> 1 Hour ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class=\"divider\"></li>
                            <li>
                                <a href=\"#\">
                                    <div>
                                        <i class=\"icon-upload\"></i> Server Rebooted
                                    <span class=\"pull-right text-muted small\"> 2 Hour ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class=\"divider\"></li>
                            <li>
                                <a class=\"text-center\" href=\"#\">
                                    <strong>See All Alerts</strong>
                                    <i class=\"icon-angle-right\"></i>
                                </a>
                            </li>
                        </ul>

                    </li>
                    <!-- END ALERTS SECTION -->

                    <!--ADMIN SETTINGS SECTIONS -->

                    <li class=\"dropdown\">
                        <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                            <i class=\"icon-user \"></i>&nbsp; <i class=\"icon-chevron-down \"></i>
                        </a>

                        <ul class=\"dropdown-menu dropdown-user\">
                            <li><a href=\"#\"><i class=\"icon-user\"></i> User Profile </a>
                            </li>
                            <li><a href=\"#\"><i class=\"icon-gear\"></i> Settings </a>
                            </li>
                            <li class=\"divider\"></li>
                            <li><a href=\"";
        // line 245
        echo $this->env->getExtension('routing')->getPath("_auth_logout");
        echo "\"><i class=\"icon-signout\"></i> Logout </a>
                            </li>
                        </ul>

                    </li>
                    <!--END ADMIN SETTINGS -->
                </ul>

            </nav>
            ";
    }

    // line 262
    public function block_nav_left_block($context, array $blocks = array())
    {
        // line 263
        echo "       <div id=\"left\" >
            <div class=\"media user-media well-small\">
                <div class=\"media-body\">
                    <h5 class=\"media-heading\"><span style=\"font-size: 14px;\">Welcome,<span><br/>";
        // line 266
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "</h5>
                </div>
                <br />
            </div>

            <ul id=\"menu\" class=\"collapse\">

                
                <li class=\"panel active\">
                    <a href=\"index.html\" >
                        <i class=\"icon-table\"></i> Dashboard
\t   
                       
                    </a>                   
                </li>



                <li class=\"panel \">
                    <a href=\"#\" data-parent=\"#menu\" data-toggle=\"collapse\" class=\"accordion-toggle\" data-target=\"#component-nav\">
                        <i class=\"icon-tasks\"> </i> UI Elements     
\t   
                        <span class=\"pull-right\">
                          <i class=\"icon-angle-left\"></i>
                        </span>
                       &nbsp; <span class=\"label label-default\">10</span>&nbsp;
                    </a>
                    <ul class=\"collapse\" id=\"component-nav\">
                       
                        <li class=\"\"><a href=\"button.html\"><i class=\"icon-angle-right\"></i> Buttons </a></li>
                         <li class=\"\"><a href=\"icon.html\"><i class=\"icon-angle-right\"></i> Icons </a></li>
                        <li class=\"\"><a href=\"progress.html\"><i class=\"icon-angle-right\"></i> Progress </a></li>
                        <li class=\"\"><a href=\"tabs_panels.html\"><i class=\"icon-angle-right\"></i> Tabs & Panels </a></li>
                        <li class=\"\"><a href=\"notifications.html\"><i class=\"icon-angle-right\"></i> Notification </a></li>
                         <li class=\"\"><a href=\"more_notifications.html\"><i class=\"icon-angle-right\"></i> More Notification </a></li>
                        <li class=\"\"><a href=\"modals.html\"><i class=\"icon-angle-right\"></i> Modals </a></li>
                          <li class=\"\"><a href=\"wizard.html\"><i class=\"icon-angle-right\"></i> Wizard </a></li>
                         <li class=\"\"><a href=\"sliders.html\"><i class=\"icon-angle-right\"></i> Sliders </a></li>
                        <li class=\"\"><a href=\"typography.html\"><i class=\"icon-angle-right\"></i> Typography </a></li>
                    </ul>
                </li>
                <li class=\"panel \">
                    <a href=\"#\" data-parent=\"#menu\" data-toggle=\"collapse\" class=\"accordion-toggle collapsed\" data-target=\"#form-nav\">
                        <i class=\"icon-pencil\"></i> Forms
\t   
                        <span class=\"pull-right\">
                            <i class=\"icon-angle-left\"></i>
                        </span>
                          &nbsp; <span class=\"label label-success\">5</span>&nbsp;
                    </a>
                    <ul class=\"collapse\" id=\"form-nav\">
                        <li class=\"\"><a href=\"forms_general.html\"><i class=\"icon-angle-right\"></i> General </a></li>
                        <li class=\"\"><a href=\"forms_advance.html\"><i class=\"icon-angle-right\"></i> Advance </a></li>
                        <li class=\"\"><a href=\"forms_validation.html\"><i class=\"icon-angle-right\"></i> Validation </a></li>
                        <li class=\"\"><a href=\"forms_fileupload.html\"><i class=\"icon-angle-right\"></i> FileUpload </a></li>
                        <li class=\"\"><a href=\"forms_editors.html\"><i class=\"icon-angle-right\"></i> WYSIWYG / Editor </a></li>
                    </ul>
                </li>

                <li class=\"panel\">
                    <a href=\"#\" data-parent=\"#menu\" data-toggle=\"collapse\" class=\"accordion-toggle\" data-target=\"#pagesr-nav\">
                        <i class=\"icon-table\"></i> Pages
\t   
                        <span class=\"pull-right\">
                            <i class=\"icon-angle-left\"></i>
                        </span>
                          &nbsp; <span class=\"label label-info\">6</span>&nbsp;
                    </a>
                    <ul class=\"collapse\" id=\"pagesr-nav\">
                        <li><a href=\"pages_calendar.html\"><i class=\"icon-angle-right\"></i> Calendar </a></li>
                        <li><a href=\"pages_timeline.html\"><i class=\"icon-angle-right\"></i> Timeline </a></li>
                        <li><a href=\"pages_social.html\"><i class=\"icon-angle-right\"></i> Social </a></li>
                        <li><a href=\"pages_pricing.html\"><i class=\"icon-angle-right\"></i> Pricing </a></li>
                        <li><a href=\"pages_offline.html\"><i class=\"icon-angle-right\"></i> Offline </a></li>
                        <li><a href=\"pages_uc.html\"><i class=\"icon-angle-right\"></i> Under Construction </a></li>
                    </ul>
                </li>
                <li class=\"panel\">
                    <a href=\"#\" data-parent=\"#menu\" data-toggle=\"collapse\" class=\"accordion-toggle\" data-target=\"#chart-nav\">
                        <i class=\"icon-bar-chart\"></i> Charts
\t   
                        <span class=\"pull-right\">
                            <i class=\"icon-angle-left\"></i>
                        </span>
                          &nbsp; <span class=\"label label-danger\">4</span>&nbsp;
                    </a>
                    <ul class=\"collapse\" id=\"chart-nav\">



                        <li><a href=\"charts_line.html\"><i class=\"icon-angle-right\"></i> Line Charts </a></li>
                        <li><a href=\"charts_bar.html\"><i class=\"icon-angle-right\"></i> Bar Charts</a></li>
                        <li><a href=\"charts_pie.html\"><i class=\"icon-angle-right\"></i> Pie Charts </a></li>
                        <li><a href=\"charts_other.html\"><i class=\"icon-angle-right\"></i> other Charts </a></li>
                    </ul>
                </li>

                <li class=\"panel\">
                    <a href=\"#\" data-parent=\"#menu\" data-toggle=\"collapse\" class=\"accordion-toggle\" data-target=\"#DDL-nav\">
                        <i class=\" icon-sitemap\"></i> 3 Level Menu
\t   
                        <span class=\"pull-right\">
                            <i class=\"icon-angle-left\"></i>
                        </span>
                    </a>
                    <ul class=\"collapse\" id=\"DDL-nav\">
                        <li>
                            <a href=\"#\" data-parent=\"#DDL-nav\" data-toggle=\"collapse\" class=\"accordion-toggle\" data-target=\"#DDL1-nav\">
                                <i class=\"icon-sitemap\"></i>&nbsp; Demo Link 1
\t   
                        <span class=\"pull-right\" style=\"margin-right: 20px;\">
                            <i class=\"icon-angle-left\"></i>
                        </span>


                            </a>
                            <ul class=\"collapse\" id=\"DDL1-nav\">
                                <li>
                                    <a href=\"#\"><i class=\"icon-angle-right\"></i> Demo Link 1 </a>

                                </li>
                                <li>
                                    <a href=\"#\"><i class=\"icon-angle-right\"></i> Demo Link 2 </a></li>
                                <li>
                                    <a href=\"#\"><i class=\"icon-angle-right\"></i> Demo Link 3 </a></li>

                            </ul>

                        </li>
                        <li><a href=\"#\"><i class=\"icon-angle-right\"></i> Demo Link 2 </a></li>
                        <li><a href=\"#\"><i class=\"icon-angle-right\"></i> Demo Link 3 </a></li>
                        <li><a href=\"#\"><i class=\"icon-angle-right\"></i> Demo Link 4 </a></li>
                    </ul>
                </li>
                <li class=\"panel\">
                    <a href=\"#\" data-parent=\"#menu\" data-toggle=\"collapse\" class=\"accordion-toggle\" data-target=\"#DDL4-nav\">
                        <i class=\" icon-folder-open-alt\"></i> 4 Level Menu
\t   
                        <span class=\"pull-right\">
                            <i class=\"icon-angle-left\"></i>
                        </span>
                    </a>
                    <ul class=\"collapse\" id=\"DDL4-nav\">
                        <li>
                            <a href=\"#\" data-parent=\"DDL4-nav\" data-toggle=\"collapse\" class=\"accordion-toggle\" data-target=\"#DDL4_1-nav\">
                                <i class=\"icon-sitemap\"></i>&nbsp; Demo Link 1
\t   
                        <span class=\"pull-right\" style=\"margin-right: 20px;\">
                            <i class=\"icon-angle-left\"></i>
                        </span>


                            </a>
                            <ul class=\"collapse\" id=\"DDL4_1-nav\">
                                <li>

                                    <a href=\"#\" data-parent=\"#DDL4_1-nav\" data-toggle=\"collapse\" class=\"accordion-toggle\" data-target=\"#DDL4_2-nav\">
                                        <i class=\"icon-sitemap\"></i>&nbsp; Demo Link 1
\t   
                        <span class=\"pull-right\" style=\"margin-right: 20px;\">
                            <i class=\"icon-angle-left\"></i>
                        </span>
                                    </a>
                                    <ul class=\"collapse\" id=\"DDL4_2-nav\">



                                        <li><a href=\"#\"><i class=\"icon-angle-right\"></i> Demo Link 1 </a></li>
                                        <li><a href=\"#\"><i class=\"icon-angle-right\"></i> Demo Link 2 </a></li>
                                    </ul>



                                </li>
                                <li><a href=\"#\"><i class=\"icon-angle-right\"></i> Demo Link 2 </a></li>
                                <li><a href=\"#\"><i class=\"icon-angle-right\"></i> Demo Link 3 </a></li>
                            </ul>

                        </li>
                        <li><a href=\"#\"><i class=\"icon-angle-right\"></i> Demo Link 2 </a></li>
                        <li><a href=\"#\"><i class=\"icon-angle-right\"></i> Demo Link 3 </a></li>
                        <li><a href=\"#\"><i class=\"icon-angle-right\"></i> Demo Link 4 </a></li>
                    </ul>
                </li>
                <li class=\"panel\">
                    <a href=\"#\" data-parent=\"#menu\" data-toggle=\"collapse\" class=\"accordion-toggle\" data-target=\"#error-nav\">
                        <i class=\"icon-warning-sign\"></i> Error Pages
\t   
                        <span class=\"pull-right\">
                            <i class=\"icon-angle-left\"></i>
                        </span>
                          &nbsp; <span class=\"label label-warning\">5</span>&nbsp;
                    </a>
                    <ul class=\"collapse\" id=\"error-nav\">
                        <li><a href=\"errors_403.html\"><i class=\"icon-angle-right\"></i> Error 403  </a></li>
                        <li><a href=\"errors_404.html\"><i class=\"icon-angle-right\"></i> Error 404  </a></li>
                        <li><a href=\"errors_405.html\"><i class=\"icon-angle-right\"></i> Error 405  </a></li>
                        <li><a href=\"errors_500.html\"><i class=\"icon-angle-right\"></i> Error 500  </a></li>
                        <li><a href=\"errors_503.html\"><i class=\"icon-angle-right\"></i> Error 503  </a></li>
                    </ul>
                </li>


                <li><a href=\"gallery.html\"><i class=\"icon-film\"></i> Image Gallery </a></li>
                <li><a href=\"tables.html\"><i class=\"icon-table\"></i> Data Tables </a></li>
                <li><a href=\"maps.html\"><i class=\"icon-map-marker\"></i> Maps </a></li>

                <li><a href=\"grid.html\"><i class=\"icon-columns\"></i> Grid </a></li>
                 <li class=\"panel\">
                    <a href=\"#\" data-parent=\"#menu\" data-toggle=\"collapse\" class=\"accordion-toggle\" data-target=\"#blank-nav\">
                        <i class=\"icon-check-empty\"></i> Blank Pages
\t   
                        <span class=\"pull-right\">
                            <i class=\"icon-angle-left\"></i>
                        </span>
                         &nbsp; <span class=\"label label-success\">2</span>&nbsp;
                    </a>
                    <ul class=\"collapse\" id=\"blank-nav\">
                       
                        <li><a href=\"blank.html\"><i class=\"icon-angle-right\"></i> Blank Page One  </a></li>
                        <li><a href=\"blank2.html\"><i class=\"icon-angle-right\"></i> Blank Page Two  </a></li>
                    </ul>
                </li>
                <li><a href=\"login.html\"><i class=\"icon-signin\"></i> Login Page </a></li>

            </ul>

        </div>
        ";
    }

    // line 500
    public function block_page_wrapper($context, array $blocks = array())
    {
        // line 501
        echo "        <div id=\"content\">
             
            <div class=\"inner\" style=\"min-height: 700px;\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <h1>";
        // line 506
        $this->displayBlock('page_title', $context, $blocks);
        echo "</h1>
                    </div>
                </div>
                  <hr />
                 <!--BLOCK SECTION -->
                 ";
        // line 511
        $this->displayBlock('content_top', $context, $blocks);
        // line 557
        echo "                  <!--END BLOCK SECTION -->
                
                   <!-- CHART & CHAT  SECTION -->
                   ";
        // line 560
        $this->displayBlock('content_main', $context, $blocks);
        // line 1096
        echo "                 <!--TABLE, PANEL, ACCORDION AND MODAL  -->

                
            </div>

        </div>
        ";
    }

    // line 506
    public function block_page_title($context, array $blocks = array())
    {
        echo " Admin Dashboard ";
    }

    // line 511
    public function block_content_top($context, array $blocks = array())
    {
        // line 512
        echo "                 <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div style=\"text-align: center;\">
                           
                            <a class=\"quick-btn\" href=\"#\">
                                <i class=\"icon-check icon-2x\"></i>
                                <span> Products</span>
                                <span class=\"label label-danger\">2</span>
                            </a>

                            <a class=\"quick-btn\" href=\"#\">
                                <i class=\"icon-envelope icon-2x\"></i>
                                <span>Messages</span>
                                <span class=\"label label-success\">456</span>
                            </a>
                            <a class=\"quick-btn\" href=\"#\">
                                <i class=\"icon-signal icon-2x\"></i>
                                <span>Profit</span>
                                <span class=\"label label-warning\">+25</span>
                            </a>
                            <a class=\"quick-btn\" href=\"#\">
                                <i class=\"icon-external-link icon-2x\"></i>
                                <span>value</span>
                                <span class=\"label btn-metis-2\">3.14159265</span>
                            </a>
                            <a class=\"quick-btn\" href=\"#\">
                                <i class=\"icon-lemon icon-2x\"></i>
                                <span>tasks</span>
                                <span class=\"label btn-metis-4\">107</span>
                            </a>
                            <a class=\"quick-btn\" href=\"#\">
                                <i class=\"icon-bolt icon-2x\"></i>
                                <span>Tickets</span>
                                <span class=\"label label-default\">20</span>
                            </a>

                            
                            
                        </div>

                    </div>

                </div>
                 <hr />
                 ";
    }

    // line 560
    public function block_content_main($context, array $blocks = array())
    {
        // line 561
        echo "                 <div class=\"row\">
                    <div class=\"col-lg-8\">
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                Real Time Traffic
                            </div>

                                                
\t\t\t<div class=\"demo-container\">
\t\t\t<div id=\"placeholderRT\" class=\"demo-placeholder\"></div>
\t\t</div>

                        </div>

                    </div>

                    
                     <div class=\"col-lg-4\">

                        <div class=\"chat-panel panel panel-primary\">
                            <div class=\"panel-heading\">
                                <i class=\"icon-comments\"></i>
                                Chat
                            <div class=\"btn-group pull-right\">
                                <button type=\"button\" data-toggle=\"dropdown\">
                                    <i class=\"icon-chevron-down\"></i>
                                </button>
                                <ul class=\"dropdown-menu slidedown\">
                                    <li>
                                        <a href=\"#\">
                                            <i class=\"icon-refresh\"></i> Refresh
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"#\">
                                            <i class=\" icon-comment\"></i> Available
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"#\">
                                            <i class=\"icon-time\"></i> Busy
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"#\">
                                            <i class=\"icon-tint\"></i> Away
                                        </a>
                                    </li>
                                    <li class=\"divider\"></li>
                                    <li>
                                        <a href=\"#\">
                                            <i class=\"icon-signout\"></i> Sign Out
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            </div>

                            <div class=\"panel-body\">
                                <ul class=\"chat\">
                                    <li class=\"left clearfix\">
                                        <span class=\"chat-img pull-left\">
                                            <img src=\"";
        // line 623
        echo twig_escape_filter($this->env, strtr($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uriForPath", array(0 => "/assets/img/1.png"), "method"), array("/app_dev.php" => "")), "html", null, true);
        echo "\" alt=\"User Avatar\" class=\"img-circle\" />
                                        </span>
                                        <div class=\"chat-body clearfix\">
                                            <div class=\"header\">
                                                <strong class=\"primary-font\"> Jack Sparrow </strong>
                                                <small class=\"pull-right text-muted\">
                                                    <i class=\"icon-time\"></i> 12 mins ago
                                                </small>
                                            </div>
                                             <br />
                                            <p>
                                                Lorem ipsum dolor sit amet, bibendum ornare dolor, quis ullamcorper ligula sodales.
                                            </p>
                                        </div>
                                    </li>
                                    <li class=\"right clearfix\">
                                        <span class=\"chat-img pull-right\">
                                            <img src=\"";
        // line 640
        echo twig_escape_filter($this->env, strtr($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uriForPath", array(0 => "/assets/img/2.png"), "method"), array("/app_dev.php" => "")), "html", null, true);
        echo "\" alt=\"User Avatar\" class=\"img-circle\" />
                                        </span>
                                        <div class=\"chat-body clearfix\">
                                            <div class=\"header\">
                                                <small class=\" text-muted\">
                                                    <i class=\"icon-time\"></i> 13 mins ago</small>
                                                <strong class=\"pull-right primary-font\"> Jhony Deen</strong>
                                            </div>
                                            <br />
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur a dolor, quis ullamcorper ligula sodales.
                                            </p>
                                        </div>
                                    </li>
                                    <li class=\"left clearfix\">
                                        <span class=\"chat-img pull-left\">
                                            <img src=\"";
        // line 656
        echo twig_escape_filter($this->env, strtr($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uriForPath", array(0 => "/assets/img/3.png"), "method"), array("/app_dev.php" => "")), "html", null, true);
        echo "\" alt=\"User Avatar\" class=\"img-circle\" />
                                        </span>
                                        <div class=\"chat-body clearfix\">
                                            <div class=\"header\">
                                                <strong class=\"primary-font\"> Jack Sparrow </strong>
                                                <small class=\"pull-right text-muted\">
                                                    <i class=\"icon-time\"></i> 12 mins ago
                                                </small>
                                            </div>
                                             <br />
                                            <p>
                                                Lorem ipsum dolor sit amet, bibendum ornare dolor, quis ullamcorper ligula sodales.
                                            </p>
                                        </div>
                                    </li>
                                    <li class=\"right clearfix\">
                                        <span class=\"chat-img pull-right\">
                                            <img src=\"";
        // line 673
        echo twig_escape_filter($this->env, strtr($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uriForPath", array(0 => "/assets/img/4.png"), "method"), array("/app_dev.php" => "")), "html", null, true);
        echo "\" alt=\"User Avatar\" class=\"img-circle\" />
                                        </span>
                                        <div class=\"chat-body clearfix\">
                                            <div class=\"header\">
                                                <small class=\" text-muted\">
                                                    <i class=\"icon-time\"></i> 13 mins ago</small>
                                                <strong class=\"pull-right primary-font\"> Jhony Deen</strong>
                                            </div>
                                            <br />
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur a dolor, quis ullamcorper ligula sodales.
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <div class=\"panel-footer\">
                                <div class=\"input-group\">
                                    <input id=\"Text1\" type=\"text\" class=\"form-control input-sm\" placeholder=\"Type your message here...\" />
                                    <span class=\"input-group-btn\">
                                        <button class=\"btn btn-warning btn-sm\" id=\"Button1\">
                                            Send
                                        </button>
                                    </span>
                                </div>
                            </div>

                        </div>


                    </div>
                </div>
                   
                 <!--END CHAT & CHAT SECTION -->
                 <!-- COMMENT AND NOTIFICATION  SECTION -->
                <div class=\"row\">
                    <div class=\"col-lg-7\">

                        <div class=\"chat-panel panel panel-success\">
                            <div class=\"panel-heading\">
                                <i class=\"icon-comments\"></i>
                                New Comments
                            
                            </div>

                            <div class=\"panel-body\">
                                <ul class=\"chat\">
                                    <li class=\"left clearfix\">
                                        <span class=\"chat-img pull-left\">
                                            <img src=\"";
        // line 723
        echo twig_escape_filter($this->env, strtr($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uriForPath", array(0 => "/assets/img/1.png"), "method"), array("/app_dev.php" => "")), "html", null, true);
        echo "\" alt=\"User Avatar\" class=\"img-circle\" />
                                        </span>
                                        <div class=\"chat-body clearfix\">
                                            <div class=\"header\">
                                                <strong class=\"primary-font \"> Jack Sparrow </strong>
                                                <small class=\"pull-right text-muted label label-danger\">
                                                    <i class=\"icon-time\"></i> 12 mins ago
                                                </small>
                                            </div>
                                             <br />
                                            <p>
                                                Lorem ipsum dolor sit amet, bibendum ornare dolor, quis ullamcorper ligula sodales.
                                            </p>
                                        </div>
                                    </li>
                                    <li class=\"right clearfix\">
                                        <span class=\"chat-img pull-right\">
                                            <img src=\"";
        // line 740
        echo twig_escape_filter($this->env, strtr($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uriForPath", array(0 => "/assets/img/2.png"), "method"), array("/app_dev.php" => "")), "html", null, true);
        echo "\" alt=\"User Avatar\" class=\"img-circle\" />
                                        </span>
                                        <div class=\"chat-body clearfix\">
                                            <div class=\"header\">
                                                <small class=\" text-muted label label-info\">
                                                    <i class=\"icon-time\"></i> 13 mins ago</small>
                                                <strong class=\"pull-right primary-font\"> Jhony Deen</strong>
                                            </div>
                                            <br />
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur a dolor, quis ullamcorper ligula sodales.
                                            </p>
                                        </div>
                                    </li>
                                    <li class=\"left clearfix\">
                                        <span class=\"chat-img pull-left\">
                                            <img src=\"";
        // line 756
        echo twig_escape_filter($this->env, strtr($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uriForPath", array(0 => "/assets/img/3.png"), "method"), array("/app_dev.php" => "")), "html", null, true);
        echo "\" alt=\"User Avatar\" class=\"img-circle\" />
                                        </span>
                                        <div class=\"chat-body clearfix\">
                                            <div class=\"header\">
                                                <strong class=\"primary-font\"> Jack Sparrow </strong>
                                                <small class=\"pull-right text-muted label label-warning\">
                                                    <i class=\"icon-time\"></i> 12 mins ago
                                                </small>
                                            </div>
                                             <br />
                                            <p>
                                                Lorem ipsum dolor sit amet, bibendum ornare dolor, quis ullamcorper ligula sodales.
                                            </p>
                                        </div>
                                    </li>
                                    <li class=\"right clearfix\">
                                        <span class=\"chat-img pull-right\">
                                            <img src=\"";
        // line 773
        echo twig_escape_filter($this->env, strtr($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uriForPath", array(0 => "/assets/img/4.png"), "method"), array("/app_dev.php" => "")), "html", null, true);
        echo "\" alt=\"User Avatar\" class=\"img-circle\" />
                                        </span>
                                        <div class=\"chat-body clearfix\">
                                            <div class=\"header\">
                                                <small class=\" text-muted label label-primary\">
                                                    <i class=\"icon-time\"></i> 13 mins ago</small>
                                                <strong class=\"pull-right primary-font\"> Jhony Deen</strong>
                                            </div>
                                            <br />
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur a dolor, quis ullamcorper ligula sodales.
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <div class=\"panel-footer\">
                                <div class=\"input-group\">
                                    <input id=\"btn-input\" type=\"text\" class=\"form-control input-sm\" placeholder=\"Type your comment here...\" />
                                    <span class=\"input-group-btn\">
                                        <button class=\"btn btn-success btn-sm\" id=\"btn-chat\">
                                            Send
                                        </button>
                                    </span>
                                </div>
                            </div>

                        </div>


                    </div>
                    <div class=\"col-lg-5\">
                         
                       <div class=\"panel panel-danger\">
                            <div class=\"panel-heading\">
                                <i class=\"icon-bell\"></i> Notifications Alerts Panel
                            </div>

                            <div class=\"panel-body\">
                                <div class=\"list-group\">
                                    <a href=\"#\" class=\"list-group-item\">
                                        <i class=\" icon-comment\"></i> New Comment
                                    <span class=\"pull-right text-muted small\"><em> 4 minutes ago</em>
                                    </span>
                                    </a>
                                    <a href=\"#\" class=\"list-group-item\">
                                        <i class=\"icon-twitter\"></i> 3 New Followers
                                    <span class=\"pull-right text-muted small\"><em> 12 minutes ago</em>
                                    </span>
                                    </a>
                                    <a href=\"#\" class=\"list-group-item\">
                                        <i class=\"icon-envelope\"></i> Message Sent
                                    <span class=\"pull-right text-muted small\"><em> 27 minutes ago</em>
                                    </span>
                                    </a>
                                    <a href=\"#\" class=\"list-group-item\">
                                        <i class=\"icon-tasks\"></i> New Task
                                    <span class=\"pull-right text-muted small\"><em>43 minutes ago</em>
                                    </span>
                                    </a>
                                    <a href=\"#\" class=\"list-group-item\">
                                        <i class=\"icon-upload\"></i> Server Rebooted
                                    <span class=\"pull-right text-muted small\"><em>11:32 AM</em>
                                    </span>
                                    </a>
                                    <a href=\"#\" class=\"list-group-item\">
                                        <i class=\"icon-warning-sign\"></i> Server Crashed!
                                    <span class=\"pull-right text-muted small\"><em>11:13 AM</em>
                                    </span>
                                    </a>
                                   
                                    <a href=\"#\" class=\"list-group-item\">
                                        <i class=\"icon-ok\"></i> New Order Placed
                                    <span class=\"pull-right text-muted small\"><em>9:49 AM</em>
                                    </span>
                                    </a>
                                    <a href=\"#\" class=\"list-group-item\">
                                        <i class=\" icon-money\"></i> Payment Received
                                    <span class=\"pull-right text-muted small\"><em>Yesterday</em>
                                    </span>
                                    </a>
                                </div>

                                <a href=\"#\" class=\"btn btn-default btn-block btn-primary\">View All Alerts</a>
                            </div>

                        </div>

                          
                    
                    </div>
                </div>
                <!-- END COMMENT AND NOTIFICATION  SECTION -->
                

                

                 <!--  STACKING CHART  SECTION   -->
                <div class=\"row\">
                   <div class=\"col-lg-12\">
                    <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                            Sales   Stacking
                            </div>

                            <div class=\"panel-body\">
                              
\t\t\t<div class=\"demo-container\">
\t\t\t<div id=\"placeholderStack\" class=\"demo-placeholder\"></div>
\t\t</div>
                                <p class=\"stackControls\">
\t\t\t<button class=\"btn btn-primary\" >With stacking</button>
\t\t\t<button class=\"btn btn-primary\">Without stacking</button>
\t\t</p>

\t\t<p class=\"graphControls\">
\t\t\t<button class=\"btn btn-primary\">Bars</button>
\t\t\t<button class=\"btn btn-primary\">Lines</button>
\t\t\t<button class=\"btn btn-primary\">Lines with steps</button>
\t\t</p>
\t\t</div>
\t\t
                            </div>
                    </div>
                     
                </div>
                 <!--END STACKING CHART SCETION  -->

                 <!--TABLE, PANEL, ACCORDION AND MODAL  -->
                          <div class=\"row\">
                    <div class=\"col-lg-6\">
                        <div class=\"box\">
                            <header>
                                <h5>Simple Table</h5>
                                <div class=\"toolbar\">
                                    <div class=\"btn-group\">
                                        <a href=\"#sortableTable\" data-toggle=\"collapse\" class=\"btn btn-default btn-sm accordion-toggle minimize-box\">
                                            <i class=\"icon-chevron-up\"></i>
                                        </a>
                                    </div>
                                </div>
                            </header>
                            <div id=\"sortableTable\" class=\"body collapse in\">
                                <table class=\"table table-bordered sortableTable responsive-table\">
                                    <thead>
                                        <tr>
                                            <th>#<i class=\"icon-sort\"></i><i class=\"icon-sort-down\"></i> <i class=\"icon-sort-up\"></i></th>
                                            <th>First Name<i class=\"icon-sort\"></i><i class=\"icon-sort-down\"></i> <i class=\"icon-sort-up\"></i></th>
                                            <th>Last Name<i class=\"icon-sort\"></i><i class=\"icon-sort-down\"></i> <i class=\"icon-sort-up\"></i></th>
                                            <th>Score<i class=\"icon-sort\"></i><i class=\"icon-sort-down\"></i> <i class=\"icon-sort-up\"></i></th>
                                        </tr>
                                    </thead>
                                    <tbody>


                                        <tr>
                                            <td>1</td>
                                            <td>Jill</td>
                                            <td>Smith</td>
                                            <td>50</td>
                                        </tr>

                                        <tr>
                                            <td>2</td>
                                            <td>Eve</td>
                                            <td>Jackson</td>
                                            <td>94</td>
                                        </tr>

                                        <tr>
                                            <td>3</td>
                                            <td>John</td>
                                            <td>Doe</td>
                                            <td>80</td>
                                        </tr>

                                        <tr>
                                            <td>4</td>
                                            <td>Adam</td>
                                            <td>Johnson</td>
                                            <td>67</td>
                                        </tr>


                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class=\"panel panel-primary\">
                            <div class=\"panel-heading \">
                                Collapsible Accordion Panel Group
                            </div>
                            <div class=\"panel-body\">
                                <div class=\"panel-group\" id=\"accordion\">
                                    <div class=\"panel panel-default\">
                                        <div class=\"panel-heading\">
                                            <h4 class=\"panel-title\">
                                                <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseOne\">Collapsible Group Item #1</a>
                                            </h4>
                                        </div>
                                        <div id=\"collapseOne\" class=\"panel-collapse collapse in\">
                                            <div class=\"panel-body\">
                                                Lorem ipsum dolor sit amet, luaute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"panel panel-default\">
                                        <div class=\"panel-heading\">
                                            <h4 class=\"panel-title\">
                                                <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseTwo\">Collapsible Group Item #2</a>
                                            </h4>
                                        </div>
                                        <div id=\"collapseTwo\" class=\"panel-collapse collapse\">
                                            <div class=\"panel-body\">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"panel panel-default\">
                                        <div class=\"panel-heading\">
                                            <h4 class=\"panel-title\">
                                                <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseThree\">Collapsible Group Item #3</a>
                                            </h4>
                                        </div>
                                        <div id=\"collapseThree\" class=\"panel-collapse collapse\">
                                            <div class=\"panel-body\">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-6\">
                        <div class=\"panel panel-primary\">
                            <div class=\"panel-heading\">
                                Primary Panel
                            </div>
                            <div class=\"panel-body\">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>
                            </div>
                            <div class=\"panel-footer\">
                                Panel Footer
                            </div>
                        </div>
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                Context Classes
                            </div>
                            <div class=\"panel-body\">
                                <div class=\"table-responsive\">
                                    <table class=\"table\">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Username</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class=\"success\">
                                                <td>1</td>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>
                                            </tr>
                                            <tr class=\"info\">
                                                <td>2</td>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>@fat</td>
                                            </tr>
                                            <tr class=\"warning\">
                                                <td>3</td>
                                                <td>Larry</td>
                                                <td>the Bird</td>
                                                <td>@twitter</td>
                                            </tr>
                                            <tr class=\"danger\">
                                                <td>4</td>
                                                <td>John</td>
                                                <td>Smith</td>
                                                <td>@jsmith</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                Modal Example
                            </div>
                            <div class=\"panel-body\">
                                <button class=\"btn btn-primary btn-lg\" data-toggle=\"modal\" data-target=\"#myModal\">
                                    Launch Demo Modal
                                </button>
                                <div class=\"modal fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
                                    <div class=\"modal-dialog\">
                                        <div class=\"modal-content\">
                                            <div class=\"modal-header\">
                                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                                                <h4 class=\"modal-title\" id=\"myModalLabel\">Modal title</h4>
                                            </div>
                                            <div class=\"modal-body\">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                            </div>
                                            <div class=\"modal-footer\">
                                                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
                                                <button type=\"button\" class=\"btn btn-primary\">Save changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                 ";
    }

    // line 1106
    public function block_content_right($context, array $blocks = array())
    {
        // line 1107
        echo "        <div id=\"right\">

            ";
        // line 1109
        $this->displayBlock('item_right', $context, $blocks);
        // line 1149
        echo "            
         

        </div>
         ";
    }

    // line 1109
    public function block_item_right($context, array $blocks = array())
    {
        // line 1110
        echo "            <div class=\"well well-small\">
                <ul class=\"list-unstyled\">
                    <li>Visitor &nbsp; : <span>23,000</span></li>
                    <li>Users &nbsp; : <span>53,000</span></li>
                    <li>Registrations &nbsp; : <span>3,000</span></li>
                </ul>
            </div>
            <div class=\"well well-small\">
                <button class=\"btn btn-block\"> Help </button>
                <button class=\"btn btn-primary btn-block\"> Tickets</button>
                <button class=\"btn btn-info btn-block\"> New </button>
                <button class=\"btn btn-success btn-block\"> Users </button>
                <button class=\"btn btn-danger btn-block\"> Profit </button>
                <button class=\"btn btn-warning btn-block\"> Sales </button>
                <button class=\"btn btn-inverse btn-block\"> Stock </button>
            </div>
            <div class=\"well well-small\">
                <span>Profit</span><span class=\"pull-right\"><small>20%</small></span>

                <div class=\"progress mini\">
                    <div class=\"progress-bar progress-bar-info\" style=\"width: 20%\"></div>
                </div>
                <span>Sales</span><span class=\"pull-right\"><small>40%</small></span>

                <div class=\"progress mini\">
                    <div class=\"progress-bar progress-bar-success\" style=\"width: 40%\"></div>
                </div>
                <span>Pending</span><span class=\"pull-right\"><small>60%</small></span>

                <div class=\"progress mini\">
                    <div class=\"progress-bar progress-bar-warning\" style=\"width: 60%\"></div>
                </div>
                <span>Summary</span><span class=\"pull-right\"><small>80%</small></span>

                <div class=\"progress mini\">
                    <div class=\"progress-bar progress-bar-danger\" style=\"width: 80%\"></div>
                </div>
            </div>
            ";
    }

    // line 1158
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 1159
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    ";
        // line 1160
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "2b3ec23_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_2b3ec23_0") : $this->env->getExtension('assets')->getAssetUrl("css/2b3ec23_timeline_1.css");
            // line 1164
            echo "    <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
            // asset "2b3ec23_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_2b3ec23_1") : $this->env->getExtension('assets')->getAssetUrl("css/2b3ec23_morris_2.css");
            echo "    <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
        } else {
            // asset "2b3ec23"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_2b3ec23") : $this->env->getExtension('assets')->getAssetUrl("css/2b3ec23.css");
            echo "    <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
        }
        unset($context["asset_url"]);
        // line 1166
        echo "
";
    }

    // line 1169
    public function block_javascripts($context, array $blocks = array())
    {
        // line 1170
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        // line 1171
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "e4d84ce_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e4d84ce_0") : $this->env->getExtension('assets')->getAssetUrl("js/e4d84ce_raphael.min_1.js");
            // line 1176
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "e4d84ce_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e4d84ce_1") : $this->env->getExtension('assets')->getAssetUrl("js/e4d84ce_morris.min_2.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "e4d84ce_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e4d84ce_2") : $this->env->getExtension('assets')->getAssetUrl("js/e4d84ce_morris-data_3.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "e4d84ce"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e4d84ce") : $this->env->getExtension('assets')->getAssetUrl("js/e4d84ce.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
    }

    public function getTemplateName()
    {
        return "BCoreAdminBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1358 => 1176,  1354 => 1171,  1349 => 1170,  1346 => 1169,  1341 => 1166,  1321 => 1164,  1317 => 1160,  1312 => 1159,  1309 => 1158,  1267 => 1110,  1264 => 1109,  1256 => 1149,  1254 => 1109,  1250 => 1107,  1247 => 1106,  920 => 773,  900 => 756,  881 => 740,  861 => 723,  808 => 673,  788 => 656,  769 => 640,  749 => 623,  685 => 561,  682 => 560,  634 => 512,  631 => 511,  625 => 506,  615 => 1096,  613 => 560,  608 => 557,  606 => 511,  598 => 506,  591 => 501,  588 => 500,  355 => 266,  350 => 263,  347 => 262,  333 => 245,  100 => 15,  90 => 7,  87 => 6,  82 => 1154,  80 => 1106,  75 => 1103,  73 => 500,  66 => 495,  64 => 262,  55 => 255,  53 => 6,  49 => 4,  46 => 3,  11 => 1,);
    }
}
