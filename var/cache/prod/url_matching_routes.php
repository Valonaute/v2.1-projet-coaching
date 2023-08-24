<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/order' => [[['_route' => 'app_order', '_controller' => 'App\\Controller\\OrderController::index'], null, null, null, false, false, null]],
        '/reset-password' => [[['_route' => 'app_forgot_password_request', '_controller' => 'App\\Controller\\ResetPasswordController::request'], null, null, null, false, false, null]],
        '/reset-password/check-email' => [[['_route' => 'app_check_email', '_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], null, null, null, false, false, null]],
        '/user/account' => [[['_route' => 'account', '_controller' => 'App\\Controller\\UserSecurityController::showAccount'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\UserSecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\UserSecurityController::logout'], null, null, null, false, false, null]],
        '/blog' => [[['_route' => 'blog', '_controller' => 'App\\Controller\\ArticleController::showArticlesFront'], null, null, null, false, false, null]],
        '/cancel' => [[['_route' => 'cancel_url', '_controller' => 'App\\Controller\\TestStripeController::cancel'], null, null, null, false, false, null]],
        '/careers' => [[['_route' => 'careers', '_controller' => 'App\\Controller\\PublicController::showCareers'], null, null, null, false, false, null]],
        '/cart' => [[['_route' => 'cart_show', '_controller' => 'App\\Controller\\CartController::cartshow'], null, null, null, false, false, null]],
        '/cart/validate' => [[['_route' => 'cart_validate', '_controller' => 'App\\Controller\\CartController::cartValidate'], null, null, null, false, false, null]],
        '/cart/remove' => [[['_route' => 'cart_remove', '_controller' => 'App\\Controller\\CartController::cartRemove'], null, null, null, false, false, null]],
        '/checkout' => [[['_route' => 'checkout', '_controller' => 'App\\Controller\\TestStripeController::checkout'], null, null, null, false, false, null]],
        '/cgu' => [[['_route' => 'cgu', '_controller' => 'App\\Controller\\PublicController::showCgu'], null, null, null, false, false, null]],
        '/connexion' => [[['_route' => 'connexion', '_controller' => 'App\\Controller\\PublicController::showConnexion'], null, null, null, false, false, null]],
        '/blog/confidence' => [[['_route' => 'confidence', '_controller' => 'App\\Controller\\ArticleController::showconfidence'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'contact', '_controller' => 'App\\Controller\\ContactController::contactForm'], null, null, null, false, false, null]],
        '/blog/communications' => [[['_route' => 'communications', '_controller' => 'App\\Controller\\ArticleController::showcommunications'], null, null, null, false, false, null]],
        '/admin/category/create' => [[['_route' => 'create_category', '_controller' => 'App\\Controller\\CategoryController::createCategory'], null, null, null, false, false, null]],
        '/admin/product/create' => [[['_route' => 'create_product', '_controller' => 'App\\Controller\\ProductController::createproduct'], null, null, null, false, false, null]],
        '/admin/article/create' => [[['_route' => 'create_article', '_controller' => 'App\\Controller\\ArticleController::createArticle'], null, null, null, false, false, null]],
        '/admin/dashboard' => [[['_route' => 'dashboard', '_controller' => 'App\\Controller\\AdminSecurityController::showDashboard'], null, null, null, false, false, null]],
        '/admin/dashboard/orders' => [[['_route' => 'dashboard_orders', '_controller' => 'App\\Controller\\AdminSecurityController::showOrders'], null, null, null, false, false, null]],
        '/admin/dashboard/users' => [[['_route' => 'dashboard_users', '_controller' => 'App\\Controller\\AdminSecurityController::showUsers'], null, null, null, false, false, null]],
        '/admin/dashboard/reviews' => [[['_route' => 'dashboard_reviews', '_controller' => 'App\\Controller\\AdminSecurityController::showReviews'], null, null, null, false, false, null]],
        '/admin/dashboard/stats' => [[['_route' => 'dashboard_stats', '_controller' => 'App\\Controller\\AdminSecurityController::showStats'], null, null, null, false, false, null]],
        '/user/delete/account' => [[['_route' => 'delete_account', '_controller' => 'App\\Controller\\UserSecurityController::deleteAccount'], null, null, null, false, false, null]],
        '/ebook' => [[['_route' => 'ebook', '_controller' => 'App\\Controller\\CategoryController::showEbook'], null, null, null, false, false, null]],
        '/formations' => [[['_route' => 'formations', '_controller' => 'App\\Controller\\CategoryController::showFormations'], null, null, null, false, false, null]],
        '/forum' => [[['_route' => 'forum', '_controller' => 'App\\Controller\\PublicController::showForum'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\PublicController::showHome'], null, null, null, false, false, null]],
        '/inscription' => [[['_route' => 'inscription', '_controller' => 'App\\Controller\\RegisterController::index'], null, null, null, false, false, null]],
        '/mailer' => [[['_route' => 'mailer', '_controller' => 'App\\Controller\\MailerController::sendEmail'], null, null, null, false, false, null]],
        '/mapsite' => [[['_route' => 'mapsite', '_controller' => 'App\\Controller\\PublicController::showMapsite'], null, null, null, false, false, null]],
        '/motivation' => [[['_route' => 'motivation', '_controller' => 'App\\Controller\\CategoryController::showMotivation'], null, null, null, false, false, null]],
        '/order/validation' => [[['_route' => 'order_validation', '_controller' => 'App\\Controller\\Order\\OrderConfirmationController::confirm'], null, null, null, false, false, null]],
        '/order/list' => [[['_route' => 'order_customer', '_controller' => 'App\\Controller\\Order\\OrderListController::index'], null, null, null, false, false, null]],
        '/blog/relations' => [[['_route' => 'relations', '_controller' => 'App\\Controller\\ArticleController::showrelations'], null, null, null, false, false, null]],
        '/review/show' => [[['_route' => 'review_show', '_controller' => 'App\\Controller\\ReviewController::show'], null, null, null, false, false, null]],
        '/rdv' => [[['_route' => 'rdv', '_controller' => 'App\\Controller\\CategoryController::showRdv'], null, null, null, false, false, null]],
        '/rgpd' => [[['_route' => 'rgpd', '_controller' => 'App\\Controller\\PublicController::showRgpd'], null, null, null, false, false, null]],
        '/category/show' => [[['_route' => 'show_category', '_controller' => 'App\\Controller\\CategoryController::showCategory'], null, null, null, false, false, null]],
        '/articles/show' => [[['_route' => 'show_article', '_controller' => 'App\\Controller\\ArticleController::showArticles'], null, null, null, false, false, null]],
        '/product/show' => [[['_route' => 'show_product', '_controller' => 'App\\Controller\\ProductController::showProducts'], null, null, null, false, false, null]],
        '/stages' => [[['_route' => 'stages', '_controller' => 'App\\Controller\\CategoryController::showStages'], null, null, null, false, false, null]],
        '/success' => [[['_route' => 'success_url', '_controller' => 'App\\Controller\\TestStripeController::success'], null, null, null, false, false, null]],
        '/user/update/account' => [[['_route' => 'update_account', '_controller' => 'App\\Controller\\UserSecurityController::updateAccount'], null, null, null, false, false, null]],
        '/user/home' => [[['_route' => 'user_home', '_controller' => 'App\\Controller\\UserSecurityController::showHome'], null, null, null, false, false, null]],
        '/valonauteinc' => [[['_route' => 'valonauteinc', '_controller' => 'App\\Controller\\PublicController::showValonauteinc'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/re(?'
                    .'|set\\-password/reset(?:/([^/]++))?(*:46)'
                    .'|view/(?'
                        .'|create/(\\d+)(*:73)'
                        .'|show/(\\d+)(*:90)'
                    .')'
                .')'
                .'|/ca(?'
                    .'|rt/(?'
                        .'|add/(\\d+)(*:120)'
                        .'|delete(?'
                            .'|/(\\d+)(*:143)'
                            .'|one/(\\d+)(*:160)'
                        .')'
                    .')'
                    .'|tegory/(\\d+)(*:182)'
                .')'
                .'|/a(?'
                    .'|dmin/(?'
                        .'|article/(?'
                            .'|delete/([^/]++)(*:230)'
                            .'|update/([^/]++)(*:253)'
                        .')'
                        .'|category/(?'
                            .'|delete/([^/]++)(*:289)'
                            .'|update/([^/]++)(*:312)'
                        .')'
                        .'|product/(?'
                            .'|delete/([^/]++)(*:347)'
                            .'|update/([^/]++)(*:370)'
                        .')'
                    .')'
                    .'|rticle/(\\d+)(*:392)'
                .')'
                .'|/product/(\\d+)(*:415)'
                .'|/order/(?'
                    .'|pay/([^/]++)(*:445)'
                    .'|terminate/(\\d+)(*:468)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        46 => [[['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null]],
        73 => [[['_route' => 'review_create', '_controller' => 'App\\Controller\\ReviewController::create'], ['id'], null, null, false, true, null]],
        90 => [[['_route' => 'review_show_one', '_controller' => 'App\\Controller\\ReviewController::showOne'], ['id'], null, null, false, true, null]],
        120 => [[['_route' => 'cart_add', '_controller' => 'App\\Controller\\CartController::add'], ['id'], null, null, false, true, null]],
        143 => [[['_route' => 'cart_delete', '_controller' => 'App\\Controller\\CartController::delete'], ['id'], null, null, false, true, null]],
        160 => [[['_route' => 'cart_delete_one', '_controller' => 'App\\Controller\\CartController::deleteOne'], ['id'], null, null, false, true, null]],
        182 => [[['_route' => 'front_category', '_controller' => 'App\\Controller\\CategoryController::showCategoryfront'], ['id'], null, null, false, true, null]],
        230 => [[['_route' => 'delete_article', '_controller' => 'App\\Controller\\ArticleController::deleteArticle'], ['id'], null, null, false, true, null]],
        253 => [[['_route' => 'update_article', '_controller' => 'App\\Controller\\ArticleController::updateArticle'], ['id'], null, null, false, true, null]],
        289 => [[['_route' => 'delete_category', '_controller' => 'App\\Controller\\CategoryController::deleteCategory'], ['id'], null, null, false, true, null]],
        312 => [[['_route' => 'update_category', '_controller' => 'App\\Controller\\CategoryController::updateCategory'], ['id'], null, null, false, true, null]],
        347 => [[['_route' => 'delete_product', '_controller' => 'App\\Controller\\ProductController::deleteProduct'], ['id'], null, null, false, true, null]],
        370 => [[['_route' => 'update_product', '_controller' => 'App\\Controller\\ProductController::updateProduct'], ['id'], null, null, false, true, null]],
        392 => [[['_route' => 'front_onearticle', '_controller' => 'App\\Controller\\ArticleController::showOneArticleFront'], ['id'], null, null, false, true, null]],
        415 => [[['_route' => 'front_product', '_controller' => 'App\\Controller\\ProductController::showOneProductFront'], ['id'], null, null, false, true, null]],
        445 => [[['_route' => 'order_payment_form', '_controller' => 'App\\Controller\\Order\\OrderPaymentController::showCard'], ['id'], null, null, false, true, null]],
        468 => [
            [['_route' => 'order_terminate', '_controller' => 'App\\Controller\\Order\\OrderPaymentSuccessController::success'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
