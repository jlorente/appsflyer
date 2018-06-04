<?php

/**
 * Part of the Appsflyer package.
 *
 * NOTICE OF LICENSE
 *
 * Licensed under the 3-clause BSD License.
 *
 * This source file is subject to the 3-clause BSD License that is
 * bundled with this package in the LICENSE file.
 *
 * @package    Appsflyer
 * @version    1.0.0
 * @author     Jose Lorente
 * @license    BSD License (3-clause)
 * @copyright  (c) 2018, Jose Lorente
 */

namespace Jlorente\Appsflyer\Data;

/**
 * Class InAppEventType.
 * 
 * @author Jose Lorente <jose.lorente.martin@gmail.com>
 * @see https://support.appsflyer.com/hc/en-us/articles/115005544169-Rich-In-App-Events-Android-and-iOS#EventTypes
 */
class InAppEventType
{

    const LEVEL_ACHIEVED = 'af_level_achieved';
    const ADD_PAYMENT_INFO = 'af_add_payment_info';
    const ADD_TO_CART = 'af_add_to_cart';
    const ADD_TO_WISH_LIST = 'af_add_to_wishlist';
    const COMPLETE_REGISTRATION = 'af_complete_registration';
    const TUTORIAL_COMPLETION = 'af_tutorial_completion';
    const INITIATED_CHECKOUT = 'af_initiated_checkout';
    const PURCHASE = 'af_purchase';
    const RATE = 'af_rate';
    const SEARCH = 'af_search';
    const SPENT_CREDIT = 'af_spent_credits';
    const ACHIEVEMENT_UNLOCKED = 'af_achievement_unlocked';
    const CONTENT_VIEW = 'af_content_view';
    const LIST_VIEW = 'af_list_view';
    const TRAVEL_BOOKING = 'af_travel_booking';
    const SHARE = 'af_share';
    const INVITE = 'af_invite';
    const LOGIN = 'af_login';
    const RE_ENGAGE = 'af_re_engage';
    const OPENED_FROM_PUSH_NOTIFICATION = 'af_opened_from_push_notification';
    const UPDATE = 'af_update';

}
