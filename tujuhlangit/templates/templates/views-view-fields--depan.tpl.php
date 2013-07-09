<?php
// $Id: views-view-fields.tpl.php,v 1.6 2008/09/24 22:48:21 merlinofchaos Exp $
/**
 * @file views-view-fields.tpl.php
 * Default simple view template to all the fields as a row.
 *
 * - $view: The view in use.
 * - $fields: an array of $field objects. Each one contains:
 *   - $field->content: The output of the field.
 *   - $field->raw: The raw data for the field, if it exists. This is NOT output safe.
 *   - $field->class: The safe class id to use.
 *   - $field->handler: The Views field handler object controlling this field. Do not use
 *     var_export to dump this object, as it can't handle the recursion.
 *   - $field->inline: Whether or not the field should be inline.
 *   - $field->inline_html: either div or span based on the above flag.
 *   - $field->separator: an optional separator that may appear before a field.
 * - $row: The raw result object from the query, with all data it fetched.
 *
 * @ingroup views_templates
 */

?>

<div class="appbox grid">
<?php /* <a href="<?php echo $fields['path']->content; ?>?width=960&height=600" class="colorbox-node" > */ ?>
  <a href="<?php echo $fields['path']->content; ?>" class="fancybox fancybox.iframe" >
  <?php echo $fields['field_app_main_image']->content; ?>
  <span class="title"><?php echo $fields['title']->content; ?></span>

  <span class="category"><?php echo $fields['field_category']->content; ?></span>


  <?php /*
  <div class="divider"></div>
  <span class="platform">
    <?php if ($fields['field_android_link']->content) { ?>
     <em class="android"></em>
     <?php } ?>
     <?php if ($fields['field_ios_link']->content) { ?>
     <em class="ios"></em>
     <?php } ?>
     <?php if ($fields['field_bb_link']->content) { ?>
     <em class="bb"></em>
     <?php } ?>

  </span>
  */ ?>
  </a>
 
</div>



