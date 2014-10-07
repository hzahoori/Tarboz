<?php

/* -----------------------------------------
  this is a constant ,we will put it inside the include files, where it will show the location to the files,
  ------------------------------------------ */
require_once DATA_ACCESSOR_DIR_USER . 'UserDataAccessor.php';

class UserManager {

  // functions in ABC order
  /* ---------------------------------------
    adds the user data to the database
    40. returns the last inserted row
    ---------------------------------------- */
  public function addUser($user) {
    $userDataAccessor = new userDataAccessor();
    $last_inserted_id = $userDataAccessor->addUser($user);
    return $last_inserted_id; // 40
  }

  /* ---------------------------------------
    if user requests password change
    ---------------------------------------- */

  public function changePassword($user) {
    $userDataAccessor = new UserDataAccessor();
    $result = $userDataAccessor->changePassword($user);
    return $result;
  }

  public function deleteUser($userid) {
    $userDataAccessor = new UserDataAccessor();
    $result = $userDataAccessor->deleteUser($userid);
    return $result;
  }

  public function getAllUsers() {
    $userDataAccessor = new UserDataAccessor();
    $users = $userDataAccessor->getAllUsers();
    return $users;
  }

  public function getUserByLanguage($languageid) {
    $userDataAccessor = new UserDataAccessor();
    $users = $userDataAccessor->getUserByLanguage($languageid);
    return $users;
  }

  public function getUserByLocation($locationid) {
    $userDataAccessor = new UserDataAccessor();
    $users = $userDataAccessor->getUserByLocation($locationid);
    return $users;
  }

  /* ---------------------------------------
    for searching, if searched by userid
    ---------------------------------------- */

  public function getUserByLoginId($userlogin) {
    $userDataAccessor = new UserDataAccessor();
    $user = $userDataAccessor->getUserByLoginId($userlogin);
    return $user;
  }

  public function getUserByName($userfname, $userlname) {
    $userDataAccessor = new UserDataAccessor();
    $users = $userDataAccessor->getUserByName($userfname, $userlname);
    return $users;
  }

  public function getUserByTypeId($usertypeid) {
    $userDataAccessor = new UserDataAccessor();
    $users = $userDataAccessor->getUserByTypeId($usertypeid);
    return $users;
  }

  /* ---------------------------------------
    A method inside the  UserDataAccessor that updates the data
    if  A user wants to make changes to his/her account
    ---------------------------------------- */

  public function updateUser($user) {
    $userDataAccessor = new UserDataAccessor();
    $result = $userDataAccessor->updateUser($user);
    return $result;
  }

}

// UserManager
?>