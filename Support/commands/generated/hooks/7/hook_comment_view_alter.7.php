/**
 * Implements hook_comment_view_alter().
 */
function <?php print $basename; ?>_comment_view_alter(&\$build) {
  ${1:// Check for the existence of a field added by another module.
  if (\$build['#view_mode'] == 'full' && isset(\$build['an_additional_field'])) {
    // Change its weight.
    \$build['an_additional_field']['#weight'] = -10;
  \}

  // Add a #post_render callback to act on the rendered HTML of the comment.
  \$build['#post_render'][] = 'my_module_comment_post_render';}
}

$2