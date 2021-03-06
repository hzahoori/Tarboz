<?php
require_once BUSINESS_DIR_LANG . "LanguageManager.php";
require_once BUSINESS_DIR_LANG . "Language.php";

function form_to_edit_entry($entry, $err_messages){
  $x = "Hi!";
  $lm = new LanguageManager();
  $auth = $entry->getEntryAuthenStatusId();
  $status = ($auth == 1 ? '1' : "not 1");
//  echo "<br>ftee:: status = " . $status;
  ?>
  <!-- 1 -->
<div align="center">
  <div style="width: 850px">
    <form 
      action="" 
      method="post" 
      style="text-align: right; 
             display: block;">
      <!--<form action="entryview.php" method="post">-->

    <?php
    //if($_GET['id']){ // 2
      //$em = new EntryManager(); // 3
      //$entry = $em->getEntryById($_GET['id']);
    //}// 2

    ?>
<!--Entry/form_to_<mark>edit</mark>_entry.php-->
      <div id="entry_create_form">

        <div class="entry_create_row">
          <div id="entry_create_form_title">Editing <?php
            if($entry->getEntryAuthenStatusId() == 1){
              echo 'the Original';
              echo ' ("'. substr($entry->getEntryText(), 0, 30) .'...")';
            }
            if($entry->getEntryAuthenStatusId() == 2){
              echo "the Translation";
              echo ' ("'. substr($entry->getEntryText(), 0, 30) .'...")';
            }
          ?><div class="note">
              Note: fields marked with the red asterisk 
              (<span class="Painted_red">*</span>) 
              are mandatory.
            </div>
          </div>
        </div>

        
        <!-- ent_entry_id -->
        <div class="entry_create_row" style="display: none;">
          <div class="entry_create_record_title">Id</div>
          <div class="entry_create_record_value">
            <!--<?php //echo $entry->getEntryId(); ?>-->
            <input 
              name="id"
              type="text"
              value="<?php echo $entry->getEntryId(); ?>" 
              readonly /><!--Lily 141029-->
          </div>
        </div>
        
        
        <!-- lan_lang_name -->
        <div class="entry_create_row">
          <div class="entry_create_record_title">
            Language
            <span class="question" id="entrycreatelang" >?</span>
          </div>
          <div class="entry_create_record_value">
            <select name="langid">
              <option value="">This is in ...</option><?php
                //$langs = $lm->getListOfLang();
                $langs = $lm->getLanguages();
                $lang_of_this_entry = $entry->getEntryLanguage();
                foreach ($langs as $lang) {
                  echo '<option value="';
                  echo $lang->getLangId();
                  echo '"';
                  echo $lang->getLangName() == $lang_of_this_entry ? ' selected="selected"' : '';
                  echo '>';
                  echo $lang->getLangName();
                  echo '</option>';
         }?></select>
            <strong style=" color: #FF365D;">
              <?php echo $err_messages['langid']; ?>
            </strong>
          </div>
        </div>

        <!-- Not sure if we need this
        <div class="entry_create_row">
          <div class="entry_create_record_title">Target language <span class="Painted_red">*</span> </div>
          <div class="entry_create_record_value">
            <select name="entry_target_lang">
              <option selected="selected">Choose one...</option>
              <option>English</option>
              <option>Russian</option>
              <option>Chinese</option>
            </select>
          </div>
        </div>
        -->
        
        
        <!-- ent_entry_text -->
        <div class="entry_create_row">
          <div class="entry_create_record_title">
            Text <span class="Painted_red">*</span>
            <span class="question" id="entrycreatetext" >?</span>
          </div>
          <div class="entry_create_record_value">
            <textarea 
              name="text"
              id="txtString2"
              rows="10" 
              cols="50"><?php
            echo $entry->getEntryText();
            ?></textarea><br />
            <strong style=" color: #FF365D;">
              <?php echo $err_messages['text']; ?>
            </strong>
          </div>
        </div>

        
        <!-- commented out because we are not creating
        the dad and a kid together, but either the dad OR a kid
        <div class="entry_create_row">
          <div class="entry_create_record_title">
             Translation <span class="Painted_red">*</span>
          </div>
          <div class="entry_create_record_value">
            <textarea rows="4" cols="50" placeholder="Enter the translation of the phrase"></textarea>
          </div>
        </div>
        -->

        
        <!-- ent_entry_verbatim to be created automatically -->
        <!-- ent_entry_verbatim will be created automatically -->
        <div class="entry_create_row">

          <div class="entry_create_record_title">
            <a href="#" id="create-verbatim-button">Recreate verbatim</a>
            <span class="Painted_red">*</span>
            <span class="question" id="entryrecreateverbatim" >?</span>
            <br>
          </div>
          <div class="entry_create_record_value">
            <textarea 
              name="verbatim"
              id="verbatim"
              rows="3" cols="50" 
              readonly ><?php
              echo $entry->getEntryVerbatim();
              ?></textarea>
            <br />
            <strong style=" color: #FF365D;">
              <?php echo $err_messages['verbatim']; ?>
            </strong>
          </div>
        </div>


        <!-- ent_entry_translit -->
        <div class="entry_create_row">
          <div class="entry_create_record_title">
            Transliteration
            <span class="question" id="entrycreatetranslit" >?</span>
          </div>
          <div class="entry_create_record_value">
            <textarea name="translit" rows="10" cols="50"><?php
            echo $entry->getEntryTranslit();
            ?></textarea>
            <strong style=" color: #FF365D;">
              <?php echo $err_messages['translit']; ?>
            </strong>
          </div>
        </div>


        <!-- entry_authen_status_id -->
        <div class="entry_create_row" style="display: none;">
          <div class="entry_create_record_title">
            Authenticity
            <span class="question" id="entrycreateauthen" >?</span>
          </div>
          <div class="entry_create_record_value">
            <input name="authen"
                   type="text"
                   value="<?php
                   if($entry->getEntryAuthenStatusId() == 1){
                     echo "1";
                   }
                   elseif($entry->getEntryAuthenStatusId() == 2){
                     echo "2";
                   }
                   elseif($entry->getEntryAuthenStatusId() == 3)
                     echo "3";?>" readonly=""/>
          </div>
        </div>

        <!-- the value of ent_entry_translation_of will be supplied automatically -->

        <!-- the value of ent_entry_creator_id will be supplied automatically -->
        <div class="entry_create_row" style="display: none;">
          <div class="entry_create_record_title">Added by</div>
          <div class="entry_create_record_value">
            <input 
              name="creator" 
              value="<?php echo $entry->getEntryUserId(); ?>"/>
          </div>
        </div>


        <!-- the value of ent_entry_media_id will be delivered ... -->
        <!-- the value of ent_entry_comment_id willl be .... -->
        <!-- the value of ent_entry_rating_id willl be .... -->

        <!-- ent_entry_tags -->
        <div class="entry_create_row">
          <div class="entry_create_record_title">
            Tags
            <span class="question" id="entrycreatetags" >?</span>
          </div>
          <div class="entry_create_record_value">
            <textarea name="tags" rows="2" cols="50"><?php
              echo $entry->getEntryTags();
          ?></textarea>
            <strong style=" color: #FF365D;">
              <?php echo $err_messages['tags']; ?>
            </strong>
          </div>
        </div>


        <!-- ent_entry_author_id --><!--
        <div class="entry_create_row">
          <div class="entry_create_record_title">
             Author [enter '3']
          </div>
          <div class="entry_create_record_value">
            <input name="author" type="text" size="50" value="<?php
              echo $entry->getEntryAuthorId();
            ?>"/>
          </div>
        </div>-->


        <!-- ent_entry_authors-->
        <div class="entry_create_row">
          <div class="entry_create_record_title">
             Authors
            <span class="question" id="entrycreateauthors" >?</span>
          </div>
          <div class="entry_create_record_value">
            <textarea name="authors" rows="2" cols="50"><?php
              echo $entry->getEntryAuthors();
              ?></textarea>
            <strong style=" color: #FF365D;">
              <?php echo $err_messages['authors']; ?>
            </strong>
          </div>
        </div>


        <!-- ent_entry_source_id -->
        <div class="entry_create_row" style="display:none;">
          <div class="entry_create_record_title">Source [enter 1]</div>
          <div class="entry_create_record_value">
            <input name="source" type="text" size="50" value="<?php
            echo $entry->getEntrySourceId();
            ?>"/>
          </div>
        </div>


        <!-- ent_entry_use -->
        <div class="entry_create_row">
          <div class="entry_create_record_title">
            Phrase use
            <span class="question" id="entrycreateuse" >?</span>
          </div>
          <div class="entry_create_record_value">
            <textarea name="use" rows="2" cols="50"><?php
              echo $entry->getEntryUse();
          ?></textarea>
            <strong>
              <?php echo $err_messages['use']; ?>
            </strong>
          </div>
        </div>


        <!-- ent_entry_http_link -->
        <div class="entry_create_row">
          <div class="entry_create_record_title">
            Http link
            <span class="question" id="entrycreatelink" >?</span>
          </div>
          <div class="entry_create_record_value">
            <textarea name="link" rows="2" cols="50"><?php
            echo $entry->getEntryHttpLink();
          ?></textarea>
            <strong>
              <?php echo $err_messages['link']; ?>
            </strong>
          </div>
        </div>


        <div 
          class="entry_create_buttons" 
          style="margin-left: 70px; 
                 margin-right: 70px;">

          <button 
            name ="submit" 
            type="submit" 
            class="en_button" >
            Submit
          </button>
            
          <input 
            type="button" 
            value="Back" 
            onclick="window.history.go(-1); return false;" 
            class="en_button"/>
          
        </div>

      </div>
  </form>
</div>
</div>
<?php
}
?>
