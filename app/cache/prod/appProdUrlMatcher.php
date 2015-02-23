<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/app')) {
            if (0 === strpos($pathinfo, '/apps')) {
                // _agn_homepage
                if ($pathinfo === '/apps') {
                    return array (  '_controller' => 'App\\AgnBundle\\Controller\\DefaultController::indexAction',  '_route' => '_agn_homepage',);
                }

                if (0 === strpos($pathinfo, '/apps/auth')) {
                    if (0 === strpos($pathinfo, '/apps/auth/log')) {
                        if (0 === strpos($pathinfo, '/apps/auth/login')) {
                            // _auth_login
                            if ($pathinfo === '/apps/auth/login') {
                                return array (  '_controller' => 'App\\AgnBundle\\Controller\\SecurityController::loginAction',  '_route' => '_auth_login',);
                            }

                            // _auth_login_check
                            if ($pathinfo === '/apps/auth/login_check') {
                                return array (  '_controller' => 'App\\AgnBundle\\Controller\\SecurityController::securityCheckAction',  '_route' => '_auth_login_check',);
                            }

                        }

                        // _auth_logout
                        if ($pathinfo === '/apps/auth/logout') {
                            return array (  '_controller' => 'App\\AgnBundle\\Controller\\SecurityController::logoutAction',  '_route' => '_auth_logout',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/apps/auth/hello')) {
                        // app_agn_security_hello
                        if ($pathinfo === '/apps/auth/hello') {
                            return array (  'name' => 'World',  '_controller' => 'App\\AgnBundle\\Controller\\SecurityController::helloAction',  '_route' => 'app_agn_security_hello',);
                        }

                        // _auth_hello
                        if (preg_match('#^/apps/auth/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => '_auth_hello')), array (  '_controller' => 'App\\AgnBundle\\Controller\\SecurityController::helloAction',));
                        }

                        // _auth_hello_admin
                        if (0 === strpos($pathinfo, '/apps/auth/hello/admin') && preg_match('#^/apps/auth/hello/admin/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => '_auth_hello_admin')), array (  '_controller' => 'App\\AgnBundle\\Controller\\SecurityController::helloadminAction',));
                        }

                    }

                    // _auth_encode_passwd
                    if (0 === strpos($pathinfo, '/apps/auth/encode/pwd') && preg_match('#^/apps/auth/encode/pwd/(?P<passwd>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_auth_encode_passwd')), array (  '_controller' => 'App\\AgnBundle\\Controller\\SecurityController::setPasswdAction',));
                    }

                }

            }

            // homepage
            if ($pathinfo === '/app/example') {
                return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
            }

        }

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }

            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcome',);
        }

        if (0 === strpos($pathinfo, '/apps/secured')) {
            if (0 === strpos($pathinfo, '/apps/secured/log')) {
                if (0 === strpos($pathinfo, '/apps/secured/login')) {
                    // _demo_login
                    if ($pathinfo === '/apps/secured/login') {
                        return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
                    }

                    // _demo_security_check
                    if ($pathinfo === '/apps/secured/login_check') {
                        return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_demo_security_check',);
                    }

                }

                // _demo_logout
                if ($pathinfo === '/apps/secured/logout') {
                    return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
                }

            }

            if (0 === strpos($pathinfo, '/apps/secured/hello')) {
                // acme_demo_secured_hello
                if ($pathinfo === '/apps/secured/hello') {
                    return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
                }

                // _demo_secured_hello
                if (preg_match('#^/apps/secured/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',));
                }

                // _demo_secured_hello_admin
                if (0 === strpos($pathinfo, '/apps/secured/hello/admin') && preg_match('#^/apps/secured/hello/admin/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello_admin')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',));
                }

            }

            // _demo_encode_passwd
            if (0 === strpos($pathinfo, '/apps/secured/encode/pwd') && preg_match('#^/apps/secured/encode/pwd/(?P<passwd>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_encode_passwd')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::setPasswdAction',));
            }

        }

        if (0 === strpos($pathinfo, '/demo')) {
            // _demo
            if (rtrim($pathinfo, '/') === '/demo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_demo');
                }

                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
            }

            // _demo_hello
            if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',));
            }

            // _demo_contact
            if ($pathinfo === '/demo/contact') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
