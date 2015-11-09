<?php

namespace common\components;


use Yii;
use yii\base\Object;
use yii\helpers\ArrayHelper;
use common\modules\user\models\User as UserModel;

class MyRbac extends Object
{
    protected static $_users = [];

    /*
     * Permissions
     */
    public static function needTestingSubscription($user, $params = [], $reset = false)
    {
        $group = static::getGroup($user, $reset);
        $allow = [
            UserModel::ROLE_CHILD,
            UserModel::ROLE_PARENT,
        ];
        return in_array($group, $allow) ? true : false;
    }

    public static function canTakeTests($user, $params = [], $reset = false)
    {
        $group = static::getGroup($user, $reset);
        $allow = [
            UserModel::ROLE_SUPER_ADMIN,
            UserModel::ROLE_ADMIN,
            UserModel::ROLE_EDITOR,
            UserModel::ROLE_SEO_EDITOR,
        ];
        return in_array($group, $allow) ? true : false;
    }

    public static function canSubscribeToTesting($user, $params = [], $reset = false)
    {
        $group = static::getGroup($user, $reset);
        $allow = [
            UserModel::ROLE_PARENT
        ];
        return in_array($group, $allow) ? true : false;
    }

    public static function canRecordTestSession($user, $params = [], $reset = false)
    {
        $group = static::getGroup($user, $reset);
        $allow = [
            UserModel::ROLE_CHILD,
        ];
        return in_array($group, $allow) ? true : false;
    }

    public static function canRecordTestResults($user, $params = [], $reset = false)
    {
        $group = static::getGroup($user, $reset);
        $allow = [
            UserModel::ROLE_CHILD
        ];
        return in_array($group, $allow) ? true : false;
    }

    public static function canAccessOwnReports($user, $params = [], $reset = false)
    {
        $group = static::getGroup($user, $reset);
        $allow = [
            UserModel::ROLE_CHILD,
        ];
        return in_array($group, $allow) ? true : false;
    }

    public static function canAccessChildReports($user, $params = [], $reset = false)
    {
        $group = static::getGroup($user, $reset);
        $allow = [
            UserModel::ROLE_PARENT,
        ];
        return in_array($group, $allow) ? true : false;
    }

    public static function canWatchOwnReports($user, $params = [], $reset = false)
    {
        $params = (array) $params;
        $reportUserId = ArrayHelper::getValue($params, 'user_id', null);

        // or static::canAccessOwnReports($user)
        $currentUser = static::getUser($user, $reset);
        $currentUserId = static::getUserId($currentUser, $reset);

        return static::canAccessOwnReports($user) && $currentUserId == $reportUserId;
    }

    public static function canAccessBackend($user, $params = [], $reset = false)
    {
        $group = static::getGroup($user, $reset);
        $allow = [
            UserModel::ROLE_SUPER_ADMIN,
            UserModel::ROLE_ADMIN,
            UserModel::ROLE_EDITOR,
            UserModel::ROLE_SEO_EDITOR,
        ];
        return in_array($group, $allow) ? true : false;
    }

    /**
     * Access family membership section.
     */
    public static function canFamilyMembershipAccess($user, $params = [], $reset = false)
    {
        $group = static::getGroup($user, $reset);
        $allow = [
            UserModel::ROLE_PARENT,
        ];
        return in_array($group, $allow) ? true : false;
    }

    public static function canAccessProfileSettings($user, $params = [], $reset = false)
    {
        $group = static::getGroup($user, $reset);
        $allow = [
            UserModel::ROLE_PARENT,
            UserModel::ROLE_CHILD,
        ];
        return in_array($group, $allow) ? true : false;
    }

    /*
     * Load user
     */
    protected static function loadUser($user_id)
    {
        if ($user_id === null) {
            return null;
        }

        return UserModel::findUserById($user_id);
    }

    public static function getUser($user, $reset = false)
    {
        if ($user === null) {
            return null;
        }

        if ($user instanceof \yii\web\User) {
            return $user->identity;
        }

        if ($user instanceof UserModel) {
            return $user;
        }

        if (Yii::$app->user->getId() == $user) {
            return Yii::$app->user->identity;
        }

        if (is_string($user) || is_numeric($user)) {
            if ($reset || !array_key_exists($user, static::$_users)) {
                static::$_users[$user] = static::loadUser($user);
            }
            return static::$_users[$user];
        }

        return null;
    }

    public static function getGroup($user, $reset = false)
    {
        $user = static::getUser($user, $reset);
        if ($user === null) {
            return null;
        }
        return ArrayHelper::getValue($user, 'role', null);
    }

    public static function getUserId($user, $reset = false)
    {
        if ($user === null) {
            return null;
        }

        if (is_string($user) || is_numeric($user)) {
            return $user;
        }

        $userModel = static::getUser($user);
        return $userModel === null ? null : $userModel->id;
    }
}
