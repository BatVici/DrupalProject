<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/contrib/business_responsive_theme/templates/layout/page.html.twig */
class __TwigTemplate_0b803b6fe3812bfab4191faff30468bd1d125476f49335aeb05ac98e886895ad extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = array("if" => 67, "for" => 138);
        $filters = array("escape" => 68, "raw" => 139);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape', 'raw'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 60
        echo "

<!-- Header and Navbar -->
<header class=\"main-header\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-sm-4 col-md-3\">
        ";
        // line 67
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 67)) {
            // line 68
            echo "          ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 68), 68, $this->source), "html", null, true);
            echo "

          <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#main-navigation\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
        
        ";
        }
        // line 78
        echo "      </div>

      ";
        // line 80
        if ((($context["show_social_icon"] ?? null) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "search", [], "any", false, false, true, 80))) {
            // line 81
            echo "        <div class=\"col-sm-8 col-md-9\">

          ";
            // line 83
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "search", [], "any", false, false, true, 83)) {
                // line 84
                echo "            ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "search", [], "any", false, false, true, 84), 84, $this->source), "html", null, true);
                echo "
          ";
            }
            // line 86
            echo "          
          ";
            // line 87
            if (($context["show_social_icon"] ?? null)) {
                // line 88
                echo "            <div class=\"social-media\">
              ";
                // line 89
                if (($context["facebook_url"] ?? null)) {
                    // line 90
                    echo "                <a href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook_url"] ?? null), 90, $this->source), "html", null, true);
                    echo "\"  class=\"facebook\" target=\"_blank\" ><i class=\"fab fa-facebook-f\"></i></a>
              ";
                }
                // line 92
                echo "              ";
                if (($context["google_plus_url"] ?? null)) {
                    // line 93
                    echo "                <a href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["google_plus_url"] ?? null), 93, $this->source), "html", null, true);
                    echo "\"  class=\"google-plus\" target=\"_blank\" ><i class=\"fab fa-google-plus-g\"></i></a>
              ";
                }
                // line 95
                echo "              ";
                if (($context["twitter_url"] ?? null)) {
                    // line 96
                    echo "                <a href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter_url"] ?? null), 96, $this->source), "html", null, true);
                    echo "\" class=\"twitter\" target=\"_blank\" ><i class=\"fab fa-twitter\"></i></a>
              ";
                }
                // line 98
                echo "              ";
                if (($context["linkedin_url"] ?? null)) {
                    // line 99
                    echo "                <a href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["linkedin_url"] ?? null), 99, $this->source), "html", null, true);
                    echo "\" class=\"linkedin\" target=\"_blank\"><i class=\"fab fa-linkedin-in\"></i></a>
              ";
                }
                // line 101
                echo "              ";
                if (($context["pinterest_url"] ?? null)) {
                    // line 102
                    echo "                <a href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pinterest_url"] ?? null), 102, $this->source), "html", null, true);
                    echo "\" class=\"pinterest\" target=\"_blank\" ><i class=\"fab fa-pinterest-p\"></i></a>
              ";
                }
                // line 104
                echo "              ";
                if (($context["rss_url"] ?? null)) {
                    // line 105
                    echo "                <a href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rss_url"] ?? null), 105, $this->source), "html", null, true);
                    echo "\" class=\"rss\" target=\"_blank\" ><i class=\"fas fa-rss\"></i></a>
              ";
                }
                // line 107
                echo "            </div>
          ";
            }
            // line 109
            echo "
        </div>
      ";
        }
        // line 112
        echo "
    </div>
  </div>
</header>
<!--End Header & Navbar -->


<div class=\"container main-menuwrap\">
  <div class=\"row\">
    <div class=\"navbar-header col-md-12\">
      <nav class=\"navbar navbar-default\" role=\"navigation\">
        

        ";
        // line 125
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 125)) {
            // line 126
            echo "          ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 126), 126, $this->source), "html", null, true);
            echo "
        ";
        }
        // line 128
        echo "      </nav>
    </div>
  </div>
</div>


";
        // line 134
        if ((($context["is_front"] ?? null) && ($context["show_slideshow"] ?? null))) {
            // line 135
            echo "  <div class=\"container\">
    <div class=\"flexslider\">
      <ul class=\"slides\">
        ";
            // line 138
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["slider_content"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["slider_contents"]) {
                // line 139
                echo "          ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed($context["slider_contents"], 139, $this->source));
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slider_contents'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 141
            echo "      </ul>
    </div>
  </div>
";
        }
        // line 145
        echo "

<!--Highlighted-->
  ";
        // line 148
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 148)) {
            // line 149
            echo "    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          ";
            // line 152
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 152), 152, $this->source), "html", null, true);
            echo "
        </div>
      </div>
    </div>
  ";
        }
        // line 157
        echo "<!--End Highlighted-->


<!-- Start Top Widget -->
";
        // line 161
        if (($context["is_front"] ?? null)) {
            echo "  
  ";
            // line 162
            if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_first", [], "any", false, false, true, 162) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_second", [], "any", false, false, true, 162)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_third", [], "any", false, false, true, 162))) {
                // line 163
                echo "    <div class=\"topwidget\">
      <!-- start: Container -->
      <div class=\"container\">
        
        <div class=\"row\">
          <!-- Top widget first region -->
          <div class = ";
                // line 169
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_class"] ?? null), 169, $this->source), "html", null, true);
                echo ">
            ";
                // line 170
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_first", [], "any", false, false, true, 170)) {
                    // line 171
                    echo "              ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_first", [], "any", false, false, true, 171), 171, $this->source), "html", null, true);
                    echo "
            ";
                }
                // line 173
                echo "          </div>
          <!-- End top widget third region -->
          <!-- Top widget second region -->
          <div class = ";
                // line 176
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_class"] ?? null), 176, $this->source), "html", null, true);
                echo ">
            ";
                // line 177
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_second", [], "any", false, false, true, 177)) {
                    // line 178
                    echo "              ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_second", [], "any", false, false, true, 178), 178, $this->source), "html", null, true);
                    echo "
            ";
                }
                // line 180
                echo "          </div>
          <!-- End top widget third region -->
          <!-- Top widget third region -->
          <div class = ";
                // line 183
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_third_class"] ?? null), 183, $this->source), "html", null, true);
                echo ">
            ";
                // line 184
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_third", [], "any", false, false, true, 184)) {
                    // line 185
                    echo "              ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_third", [], "any", false, false, true, 185), 185, $this->source), "html", null, true);
                    echo "
            ";
                }
                // line 187
                echo "          </div>
          <!-- End top widget third region -->
        </div>
      </div>
    </div>
  ";
            }
        }
        // line 194
        echo "<!--End Top Widget -->


<!-- Start Middle Widget -->
";
        // line 198
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "middle_first", [], "any", false, false, true, 198) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "middle_second", [], "any", false, false, true, 198)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "middle_third", [], "any", false, false, true, 198))) {
            // line 199
            echo "  <div class=\"middlewidget\">
    <!-- start: Container -->
    <div class=\"container\">
      
      <div class=\"row\">
        <!-- Top widget first region -->
        <div class = ";
            // line 205
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["middle_class"] ?? null), 205, $this->source), "html", null, true);
            echo ">
          ";
            // line 206
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "middle_first", [], "any", false, false, true, 206)) {
                // line 207
                echo "            ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "middle_first", [], "any", false, false, true, 207), 207, $this->source), "html", null, true);
                echo "
          ";
            }
            // line 209
            echo "        </div>
        <!-- End top widget third region -->
        <!-- Top widget second region -->
        <div class = ";
            // line 212
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["middle_class"] ?? null), 212, $this->source), "html", null, true);
            echo ">
          ";
            // line 213
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "middle_second", [], "any", false, false, true, 213)) {
                // line 214
                echo "            ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "middle_second", [], "any", false, false, true, 214), 214, $this->source), "html", null, true);
                echo "
          ";
            }
            // line 216
            echo "        </div>
        <!-- End top widget third region -->
        <!-- Top widget third region -->
        <div class = ";
            // line 219
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["middle_third_class"] ?? null), 219, $this->source), "html", null, true);
            echo ">
          ";
            // line 220
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "middle_third", [], "any", false, false, true, 220)) {
                // line 221
                echo "            ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "middle_third", [], "any", false, false, true, 221), 221, $this->source), "html", null, true);
                echo "
          ";
            }
            // line 223
            echo "        </div>
        <!-- End top widget third region -->
      </div>
    </div>
  </div>
";
        }
        // line 229
        echo "<!--End Top Widget -->


<!-- Page Title -->
";
        // line 233
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "page_title", [], "any", false, false, true, 233) &&  !($context["is_front"] ?? null))) {
            // line 234
            echo "  <div id=\"page-title\">
    <div id=\"page-title-inner\">
      <!-- start: Container -->
      <div class=\"container\">
        ";
            // line 238
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "page_title", [], "any", false, false, true, 238), 238, $this->source), "html", null, true);
            echo "
      </div>
    </div>
  </div>
";
        }
        // line 243
        echo "<!-- End Page Title ---- >


<!-- layout -->
<div id=\"wrapper\">
  <!-- start: Container -->
  <div class=\"container\">
    
    <!--Content top-->
      ";
        // line 252
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_top", [], "any", false, false, true, 252)) {
            // line 253
            echo "        <div class=\"row\">
          ";
            // line 254
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_top", [], "any", false, false, true, 254), 254, $this->source), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 257
        echo "    <!--End Content top-->
    
    <!--start:content -->
    <div class=\"row\">
      <div class=\"col-md-12\">";
        // line 261
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 261), 261, $this->source), "html", null, true);
        echo "</div>
    </div>

    <div class=\"row layout\">
      <!--- Start Left SideBar -->
      ";
        // line 266
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 266)) {
            // line 267
            echo "        <div class=\"sidebar\" >
          <div class = ";
            // line 268
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarfirst"] ?? null), 268, $this->source), "html", null, true);
            echo " >
            ";
            // line 269
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 269), 269, $this->source), "html", null, true);
            echo "
          </div>
        </div>
      ";
        }
        // line 273
        echo "      <!---End Right SideBar -->

      <!--- Start content -->
      ";
        // line 276
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 276)) {
            // line 277
            echo "        <div class=\"content_layout\">
          <div class=";
            // line 278
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["contentlayout"] ?? null), 278, $this->source), "html", null, true);
            echo ">
            ";
            // line 279
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 279), 279, $this->source), "html", null, true);
            echo "
          </div>
        </div>
      ";
        }
        // line 283
        echo "      <!---End content -->

      <!--- Start Right SideBar -->
      ";
        // line 286
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 286)) {
            // line 287
            echo "        <div class=\"sidebar\">
          <div class=";
            // line 288
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarsecond"] ?? null), 288, $this->source), "html", null, true);
            echo ">
            ";
            // line 289
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 289), 289, $this->source), "html", null, true);
            echo "
          </div>
        </div>
      ";
        }
        // line 293
        echo "      <!---End Right SideBar -->
      
    </div>
    <!--End Content -->

    <!--Start Content Bottom-->
    ";
        // line 299
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom", [], "any", false, false, true, 299)) {
            // line 300
            echo "      <div class=\"row\">
        ";
            // line 301
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom", [], "any", false, false, true, 301), 301, $this->source), "html", null, true);
            echo "
      </div>
    ";
        }
        // line 304
        echo "    <!--End Content Bottom-->
  </div>
</div>
<!-- End layout -->


<!-- Start: Price table widgets -->

";
        // line 312
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "pricetable_first", [], "any", false, false, true, 312) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "pricetable_second", [], "any", false, false, true, 312)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "pricetable_third", [], "any", false, false, true, 312))) {
            // line 313
            echo "
  <div class=\"price-table\" id=\"price-table\">    
    <div class=\"container\">
      <div class=\"row\">

        <!-- Start: Bottom First -->          
        ";
            // line 319
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "pricetable_first", [], "any", false, false, true, 319)) {
                // line 320
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pricetable_class"] ?? null), 320, $this->source), "html", null, true);
                echo ">
            ";
                // line 321
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "pricetable_first", [], "any", false, false, true, 321), 321, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 323
            echo "          
        <!-- End: Bottom First -->

        <!-- Start: Bottom Second -->
        ";
            // line 327
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "pricetable_second", [], "any", false, false, true, 327)) {
                // line 328
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pricetable_class"] ?? null), 328, $this->source), "html", null, true);
                echo ">
            ";
                // line 329
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "pricetable_second", [], "any", false, false, true, 329), 329, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 331
            echo "          
        <!-- End: Bottom Second -->

        <!-- Start: Bottom third -->          
        ";
            // line 335
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "pricetable_third", [], "any", false, false, true, 335)) {
                // line 336
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pricetable_class"] ?? null), 336, $this->source), "html", null, true);
                echo ">
            ";
                // line 337
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "pricetable_third", [], "any", false, false, true, 337), 337, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 339
            echo "          
        <!-- End: Bottom Third -->

        <!-- Start: Bottom third -->          
        ";
            // line 343
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "pricetable_forth", [], "any", false, false, true, 343)) {
                // line 344
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pricetable_class"] ?? null), 344, $this->source), "html", null, true);
                echo ">
            ";
                // line 345
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "pricetable_forth", [], "any", false, false, true, 345), 345, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 347
            echo "          
        <!-- End: Bottom Third -->

      </div>
    </div>
  </div>

";
        }
        // line 355
        echo "
<!--End: Price table widgets -->


<!-- start: bottom -->
";
        // line 360
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_first", [], "any", false, false, true, 360) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_second", [], "any", false, false, true, 360)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_third", [], "any", false, false, true, 360))) {
            // line 361
            echo "  <div class=\"bottomwidget\">
    <div class=\"container\">
      
      <div class=\"row\">
        
        <!-- Start bottom First Region -->
        <div class = ";
            // line 367
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null), 367, $this->source), "html", null, true);
            echo ">
          ";
            // line 368
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_first", [], "any", false, false, true, 368)) {
                // line 369
                echo "            ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_first", [], "any", false, false, true, 369), 369, $this->source), "html", null, true);
                echo "
          ";
            }
            // line 371
            echo "        </div>
        <!-- End bottom First Region -->

        <!-- Start bottom Second Region -->
        <div class = ";
            // line 375
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null), 375, $this->source), "html", null, true);
            echo ">
          ";
            // line 376
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_second", [], "any", false, false, true, 376)) {
                // line 377
                echo "            ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_second", [], "any", false, false, true, 377), 377, $this->source), "html", null, true);
                echo "
          ";
            }
            // line 379
            echo "        </div>
        <!-- End bottom Second Region -->

        <!-- Start bottom third Region -->
        <div class = ";
            // line 383
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null), 383, $this->source), "html", null, true);
            echo ">
          ";
            // line 384
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_third", [], "any", false, false, true, 384)) {
                // line 385
                echo "            ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_third", [], "any", false, false, true, 385), 385, $this->source), "html", null, true);
                echo "
          ";
            }
            // line 387
            echo "        </div>
        <!-- End bottom Third Region -->
      </div>
    </div>
  </div>
";
        }
        // line 393
        echo "<!--End bottom -->


<!-- start: Footer -->
";
        // line 397
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 397) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 397)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 397))) {
            // line 398
            echo "  <div class=\"footerwidget\">
    <div class=\"container\">
      
      <div class=\"row\">
        
        <!-- Start Footer First Region -->
        <div class = ";
            // line 404
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_class"] ?? null), 404, $this->source), "html", null, true);
            echo ">
          ";
            // line 405
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 405)) {
                // line 406
                echo "            ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 406), 406, $this->source), "html", null, true);
                echo "
          ";
            }
            // line 408
            echo "        </div>
        <!-- End Footer First Region -->

        <!-- Start Footer Second Region -->
        <div class = ";
            // line 412
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_class"] ?? null), 412, $this->source), "html", null, true);
            echo ">
          ";
            // line 413
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 413)) {
                // line 414
                echo "            ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 414), 414, $this->source), "html", null, true);
                echo "
          ";
            }
            // line 416
            echo "        </div>
        <!-- End Footer Second Region -->

        <!-- Start Footer third Region -->
        <div class = ";
            // line 420
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_class"] ?? null), 420, $this->source), "html", null, true);
            echo ">
          ";
            // line 421
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 421)) {
                // line 422
                echo "            ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 422), 422, $this->source), "html", null, true);
                echo "
          ";
            }
            // line 424
            echo "        </div>
        <!-- End Footer Third Region -->
      </div>
    </div>
  </div>
";
        }
        // line 430
        echo "<!--End Footer -->


<!-- Start Footer Menu -->
";
        // line 434
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_menu", [], "any", false, false, true, 434)) {
            // line 435
            echo "  <div class=\"footer-menu\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-sm-6 col-md-6\">
          ";
            // line 439
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_menu", [], "any", false, false, true, 439), 439, $this->source), "html", null, true);
            echo "
        </div>
        
      </div>
    </div>
  </div>
";
        }
        // line 446
        echo "<!-- End Footer Menu -->


";
        // line 449
        if ((($context["copyright_text"] ?? null) || ($context["show_credit_link"] ?? null))) {
            // line 450
            echo "<div class=\"copyright\">
  <div class=\"container\">
    <div class=\"row\">

      <!-- Copyright -->
      <div class=\"col-sm-6 col-md-6\">
        ";
            // line 456
            if (($context["copyright_text"] ?? null)) {
                echo "        
          <p>";
                // line 457
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["copyright_text"] ?? null), 457, $this->source), "html", null, true);
                echo "</p>        
        ";
            }
            // line 459
            echo "      </div>
      <!-- End Copyright -->

      <!-- Credit link -->
      ";
            // line 463
            if (($context["show_credit_link"] ?? null)) {
                // line 464
                echo "        <div class=\"col-sm-6 col-md-6\">
          <p class=\"credit-link\">Designed by <a href=\"http://www.zymphonies.in\" target=\"_blank\">Zymphonies</a></p>
        </div>
      ";
            }
            // line 468
            echo "      <!-- End Credit link -->
            
    </div>
  </div>
</div>
";
        }
        // line 474
        echo "
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/business_responsive_theme/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  847 => 474,  839 => 468,  833 => 464,  831 => 463,  825 => 459,  820 => 457,  816 => 456,  808 => 450,  806 => 449,  801 => 446,  791 => 439,  785 => 435,  783 => 434,  777 => 430,  769 => 424,  763 => 422,  761 => 421,  757 => 420,  751 => 416,  745 => 414,  743 => 413,  739 => 412,  733 => 408,  727 => 406,  725 => 405,  721 => 404,  713 => 398,  711 => 397,  705 => 393,  697 => 387,  691 => 385,  689 => 384,  685 => 383,  679 => 379,  673 => 377,  671 => 376,  667 => 375,  661 => 371,  655 => 369,  653 => 368,  649 => 367,  641 => 361,  639 => 360,  632 => 355,  622 => 347,  616 => 345,  611 => 344,  609 => 343,  603 => 339,  597 => 337,  592 => 336,  590 => 335,  584 => 331,  578 => 329,  573 => 328,  571 => 327,  565 => 323,  559 => 321,  554 => 320,  552 => 319,  544 => 313,  542 => 312,  532 => 304,  526 => 301,  523 => 300,  521 => 299,  513 => 293,  506 => 289,  502 => 288,  499 => 287,  497 => 286,  492 => 283,  485 => 279,  481 => 278,  478 => 277,  476 => 276,  471 => 273,  464 => 269,  460 => 268,  457 => 267,  455 => 266,  447 => 261,  441 => 257,  435 => 254,  432 => 253,  430 => 252,  419 => 243,  411 => 238,  405 => 234,  403 => 233,  397 => 229,  389 => 223,  383 => 221,  381 => 220,  377 => 219,  372 => 216,  366 => 214,  364 => 213,  360 => 212,  355 => 209,  349 => 207,  347 => 206,  343 => 205,  335 => 199,  333 => 198,  327 => 194,  318 => 187,  312 => 185,  310 => 184,  306 => 183,  301 => 180,  295 => 178,  293 => 177,  289 => 176,  284 => 173,  278 => 171,  276 => 170,  272 => 169,  264 => 163,  262 => 162,  258 => 161,  252 => 157,  244 => 152,  239 => 149,  237 => 148,  232 => 145,  226 => 141,  217 => 139,  213 => 138,  208 => 135,  206 => 134,  198 => 128,  192 => 126,  190 => 125,  175 => 112,  170 => 109,  166 => 107,  160 => 105,  157 => 104,  151 => 102,  148 => 101,  142 => 99,  139 => 98,  133 => 96,  130 => 95,  124 => 93,  121 => 92,  115 => 90,  113 => 89,  110 => 88,  108 => 87,  105 => 86,  99 => 84,  97 => 83,  93 => 81,  91 => 80,  87 => 78,  73 => 68,  71 => 67,  62 => 60,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/business_responsive_theme/templates/layout/page.html.twig", "D:\\wamp\\www\\my-project\\web\\themes\\contrib\\business_responsive_theme\\templates\\layout\\page.html.twig");
    }
}
