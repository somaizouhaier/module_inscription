<?php

/* atnUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_8f1232240218e91fde84e54c007bdd3b979dcd53e7dad01bc815755380adb60f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 82
        echo "<div class=\"row\">
               
                <div class=\"col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1\">
                        <div class=\"panel modal-dialog modal-content\">
                            <div class=\"panel-heading\">
                        <strong>  Enregistrez vos données </strong>  
                            </div>
                            <div class=\"panel-body\">
                               <form action=\"";
        // line 90
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" >

                                        <div class=\"form-group input-group\">
                                            <span class=\"input-group-addon\"><i class=\"fa fa-tag\"></i></span>
                                            ";
        // line 94
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => " pseudonyme")));
        echo "
                                          
                                        </div>
                                     <div class=\"form-group input-group\">
                                            <span class=\"input-group-addon\">@</span>
                                           ";
        // line 99
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "exemple@exple.exple")));
        echo "
                                        </div>
                                         <div class=\"form-group input-group\">
                                            <span class=\"input-group-addon\"><i class=\"fa fa-lock\"></i></span>
                                           ";
        // line 103
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "mot de passe")));
        echo "
                                        </div>
                                      <div class=\"form-group input-group\">
                                            <span class=\"input-group-addon\"><i class=\"fa fa-lock\"></i></span>
                                             ";
        // line 107
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "confirmer mot de passe")));
        echo "
                                        </div>
                                     <button type=\"submit\" id=\"_submit\" name=\"_submit\"  class=\"btn btn-danger\">Inscrivez-vous&nbsp&nbsp<span class=\"glyphicon glyphicon-chevron-right\"></span></button>
                                    <hr>
                                    
                                    ";
        // line 112
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                                    </form>
                                    Déjà enregistré?&nbsp&nbsp   <a href=\" \" >connectez ici</a>
                            </div>
                           
                        </div>
                    </div>
                
                
        </div>
    
    
    
";
    }

    public function getTemplateName()
    {
        return "atnUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 112,  60 => 107,  53 => 103,  46 => 99,  38 => 94,  29 => 90,  19 => 82,);
    }
}
