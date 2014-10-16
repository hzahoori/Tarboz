<?php

require_once DATA_ACCESSOR_DIR_ENTRY . 'EntryDataAccessor.php';

class EntryManager {

  /**
   *
   * @param type $entry
   * @return $last_inserted_id (the ID generated in the last query)
   */
  public function createEntry($entry) {
    $eda = new EntryDataAccessor();
    $last_inserted_id = $eda->addEntry($entry);
    return $last_inserted_id;
  }

  /**
   *
   * @param type $entry
   * @return $resultOfEntryUpdate
   */
  public function updateEntry($entry) {
    $eda = new EntryDataAccessor();
    $resultOfEntryUpdate = $eda->updateEntry($entry);
    return $resultOfEntryUpdate;
  }

  /**
   *
   * @param type $entryId
   * @return $resultOfEntryDelete
   */
  public function deleteEntry($entryId) {
    $eda = new EntryDataAccessor();
    $resultOfEntryDelete = $eda->deleteEntry($entryId);
    return $resultOfEntryDelete;
  }

  /**
   *
   * @param type $entryId
   * @return $entryGottenById
   */
  public function getEntryById($entryId) {
    $eda = new EntryDataAccessor();
    $entryGottenById = $eda->getEntryById($entryId);
    return $entryGottenById;
  }
  /**
   *
   * @param string $verbatim
   * @return $entrySetGottenByVerbatim
   */
  public function getEntrySetByVerbatim($verbatim) {
    $eda = new EntryDataAccessor();
    $entrySetGottenByVerbatim = $eda->getEntrySetByVerbatim($verbatim);
    return $entrySetGottenByVerbatim;
  }

  /**
   *
   * @return $arrayOfFathers
   */
  public function getAllFathers() {
    $eda = new EntryDataAccessor();
    $arrayOfFathers = $eda->getAllFathers();
    return $arrayOfFathers;
  }

  public function getFatherByVerbatim($verbatim) {
    $eda = new EntryDataAccessor();
    $fatherGottenByVerbatim = $eda->getFatherByVerbatim($verbatim);
    return $fatherGottenByVerbatim;
  }
  /**
   * getKidsByVerbatim($verbatim)
   * To retrieve one array of multiple 'kid' entries by verbatim
   * @param type $verbatim
   * @return one array of 'kid' entries gotten by verbatim
   */
  public function getKidsByVerbatim($verbatim) {
    $eda = new EntryDataAccessor();
    $kidsGottenByVerbatim = $eda->getKidsByVerbatim($verbatim);
    return $kidsGottenByVerbatim;
  }

}
