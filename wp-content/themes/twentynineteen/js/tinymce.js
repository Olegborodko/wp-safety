(function() {
  tinymce.PluginManager.add('wdm_mce_button', function( editor, url ) {
    editor.addButton('wdm_mce_button', {
      text: 'WDM',
      icon: false,
      onclick: function() {
        // change the shortcode as per your requirement
        editor.insertContent('[wdm_shortcode]');
      }
    });
  });
})();