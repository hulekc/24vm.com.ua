<style>
#cke_104 {
    display:none !important;
}
</style>
<div id="filemanager" class="modal-dialog modal-lg">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      <h4 class="modal-title"><?php echo $heading_title; ?></h4>
    </div>
    <div class="modal-body">
      <div class="row">
        <div class="col-sm-5">
            <a href="<?php echo $parent; ?>" data-toggle="tooltip" title="<?php echo $button_parent; ?>" id="button-parent" class="btn btn-default"><i class="fa fa-level-up"></i></a>
            <a href="<?php echo $refresh; ?>" data-toggle="tooltip" title="<?php echo $button_refresh; ?>" id="button-refresh" class="btn btn-default"><i class="fa fa-refresh"></i></a>
            <button type="button" data-toggle="tooltip" title="<?php echo $button_upload; ?>" id="button-upload" class="btn btn-primary"><i class="fa fa-upload"></i></button>
            <button type="button" data-toggle="tooltip" title="<?php echo $button_folder; ?>" id="button-folder" class="btn btn-default"><i class="fa fa-folder"></i></button>
            <button type="button" data-toggle="tooltip" title="<?php echo $button_delete; ?>" id="button-delete" class="btn btn-danger"><i class="fa fa-trash-o"></i></button>
        </div>
        <div class="col-sm-7">
          <div class="input-group">
            <input type="text" name="search" value="<?php echo $filter_name; ?>" placeholder="<?php echo $entry_search; ?>" class="form-control">
            <span class="input-group-btn">
            <button type="button" data-toggle="tooltip" title="<?php echo $button_search; ?>" id="button-search" class="btn btn-primary"><i class="fa fa-search"></i></button>
            </span></div>
        </div>
      </div>
      <div class="row container">
          <ul class="breadcrumb">
            <?php foreach ($breadcrumbs as $breadcrumb) { ?>
            <li><a href="<?php echo $breadcrumb['href']; ?>"><?php echo $breadcrumb['text']; ?></a></li>
            <?php } ?>
          </ul>
      </div>
      <hr />
      <?php foreach (array_chunk($images, 4) as $image) { ?>
      <div class="row">
        <?php foreach ($image as $image) { ?>
        <div class="col-sm-3 col-xs-6 text-center">
          <?php if ($image['type'] == 'directory') { ?>
          <div class="text-center"><a href="<?php echo $image['href']; ?>" class="directory" style="vertical-align: middle;"><i class="fa fa-folder fa-5x"></i></a></div>
          <label>
            <input type="checkbox" name="path[]" value="<?php echo $image['path']; ?>" />
            <?php echo $image['name']; ?></label>
          <?php } ?>
          <?php if ($image['type'] == 'image') { ?>
          <a href="<?php echo $image['href']; ?>" class="thumbnail"><img src="<?php echo $image['thumb']; ?>" alt="<?php echo $image['name']; ?>" title="<?php echo $image['name']; ?>" /></a>
          <label>
            <input type="checkbox" name="path[]" value="<?php echo $image['path']; ?>" />
            <?php echo $image['name']; ?></label>
          <?php } ?>
        </div>
        <?php } ?>
      </div>
      <br />
      <?php } ?>
    </div>
    <div class="modal-footer"><?php echo $pagination; ?></div>
  </div>
</div>

<style>
.modal-open .modal {
    z-index: 100000 !important;
}

#filemanager .container {
    padding-right: 0px;
    padding-left: 0px;
    margin-right: auto;
    margin-left: auto;
    margin-top: 10px;
    width: inherit;
}
#filemanager .breadcrumb {
    margin: 0;
    padding: 8px 0;
    border: 1px solid #ddd;
    list-style: none;
    background-color: #f5f5f5;
    border-radius: 4px;
    width: 100%;
}

#filemanager .breadcrumb > li {
    text-shadow: 0 1px 0 #FFF;
    padding: 0 20px;
    position: relative;
    white-space: nowrap;
    display: inline-block;
    color: #23a1d1;
    cursor: pointer;
}
#filemanager .breadcrumb > li + li:before {
    content: '';
    padding: 0;
}
#filemanager .breadcrumb > li:after {
    content: '';
    display: block;
    position: absolute;
    top: -3px;
    right: -5px;
    width: 26px;
    height: 26px;
    border-right: 1px solid #DDD;
    border-bottom: 1px solid #DDD;
    -webkit-transform: rotate(-45deg);
    -moz-transform: rotate(-45deg);
    -o-transform: rotate(-45deg);
    transform: rotate(-45deg);
}

</style>
<script type="text/javascript"><!--
jQuery(document).ready(function($) {
    $('.breadcrumb').on('click', 'li a', function(event) {
        event.preventDefault();
        $('#modal-image').load($(this).attr('href'));
    });
});

<?php if ($target) { ?>
$('a.thumbnail').on('click', function(e) {
    e.preventDefault();
    <?php if ($thumb) { ?>
    $('#<?php echo $thumb; ?>').find('img').attr('src', $(this).find('img').attr('src'));
    <?php } ?>
    $('#<?php echo $target; ?>').val($(this).parent().find('input').val());
    $('#modal-image').modal('hide');
});


<?php } else { ?>
$('a.thumbnail').on('click', function(e) {
  e.preventDefault();
  <?php if ($cke) { ?>
    var cke_target = '<?php echo $cke; ?>' || null;
    cke_target = cke_target.split( ':' ); //link,txtUrl
    CKEDITOR.dialog.getCurrent().setValueOf(cke_target[0], cke_target[1], this.getAttribute('href'));
  <?php } ?>

  $('#modal-image').modal('hide');
});
      
<?php } ?>

$('a.directory').on('click', function(e) {
    e.preventDefault();
    $('#modal-image').load($(this).attr('href'));
});

$('.pagination a').on('click', function(e) {
    e.preventDefault();
    $('#modal-image').load($(this).attr('href'));
});

$('#button-parent').on('click', function(e) {
    e.preventDefault();
    $('#modal-image').load($(this).attr('href'));
});

$('#button-refresh').on('click', function(e) {
    e.preventDefault();
    $('#modal-image').load($(this).attr('href'));
});

$('input[name=\'search\']').on('keydown', function(e) {
    if (e.which == 13) {
        $('#button-search').trigger('click');
    }
});

$('#button-search').on('click', function(e) {
    var url = 'index.php?route=extension/cke_filemanager&<?php echo $token; ?>&directory=<?php echo $directory; ?>';

    var filter_name = $('input[name=\'search\']').val();

    if (filter_name) {
        url += '&filter_name=' + encodeURIComponent(filter_name);
    }

    <?php if ($thumb) { ?>
    url += '&thumb=' + '<?php echo $thumb; ?>';
    <?php } ?>

    <?php if ($cke) { ?>
    url += '&cke=' + '<?php echo $cke; ?>';
    <?php } ?>
          

    <?php if ($target) { ?>
    url += '&target=' + '<?php echo $target; ?>';
    <?php } ?>

    $('#modal-image').load(url);
});

$('#button-upload').on('click', function() {
    $('#form-upload').remove();

    $('body').prepend('<form enctype="multipart/form-data" id="form-upload" style="display: none;"><input type="file" name="file[]" value="" multiple="multiple" /></form>');

    $('#form-upload input[name=\'file[]\']').trigger('click');

    if (typeof timer != 'undefined') {
        clearInterval(timer);
    }

    timer = setInterval(function() {
        if ($('#form-upload input[name=\'file[]\']').val() != '') {
            clearInterval(timer);

            $.ajax({
                url: 'index.php?route=extension/cke_filemanager/upload&<?php echo $token; ?>&directory=<?php echo $directory; ?>',
                type: 'post',
                dataType: 'json',
                data: new FormData($('#form-upload')[0]),
                cache: false,
                contentType: false,
                processData: false,
                beforeSend: function() {
                    $('#button-upload i').replaceWith('<i class="fa fa-circle-o-notch fa-spin"></i>');
                    $('#button-upload').prop('disabled', true);
                },
                complete: function() {
                    $('#button-upload i').replaceWith('<i class="fa fa-upload"></i>');
                    $('#button-upload').prop('disabled', false);
                },
                success: function(json) {
                    if (json['error']) {
                        alert(json['error']);
                    }

                    if (json['success']) {
                        alert(json['success']);

                        $('#button-refresh').trigger('click');
                    }
                },
                error: function(xhr, ajaxOptions, thrownError) {
                    alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
                }
            });
        }
    }, 500);
});

$('#button-folder').popover({
    html: true,
    placement: 'bottom',
    trigger: 'click',
    title: '<?php echo $entry_folder; ?>',
    content: function() {
        html  = '<div class="input-group">';
        html += '  <input type="text" name="folder" value="" placeholder="<?php echo $entry_folder; ?>" class="form-control">';
        html += '  <span class="input-group-btn"><button type="button" title="<?php echo $button_folder; ?>" id="button-create" class="btn btn-primary"><i class="fa fa-plus-circle"></i></button></span>';
        html += '</div>';

        return html;
    }
});

$('#button-folder').on('shown.bs.popover', function() {
    $('#button-create').on('click', function() {
        $.ajax({
            url: 'index.php?route=extension/cke_filemanager/folder&<?php echo $token; ?>&directory=<?php echo $directory; ?>',
            type: 'post',
            dataType: 'json',
            data: 'folder=' + encodeURIComponent($('input[name=\'folder\']').val()),
            beforeSend: function() {
                $('#button-create').prop('disabled', true);
            },
            complete: function() {
                $('#button-create').prop('disabled', false);
            },
            success: function(json) {
                if (json['error']) {
                    alert(json['error']);
                }

                if (json['success']) {
                    alert(json['success']);

                    $('#button-refresh').trigger('click');
                }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
            }
        });
    });
});

$('#modal-image #button-delete').on('click', function(e) {
    if (confirm('<?php echo $text_confirm; ?>')) {
        $.ajax({
            url: 'index.php?route=extension/cke_filemanager/delete&<?php echo $token; ?>',
            type: 'post',
            dataType: 'json',
            data: $('input[name^=\'path\']:checked'),
            beforeSend: function() {
                $('#button-delete').prop('disabled', true);
            },
            complete: function() {
                $('#button-delete').prop('disabled', false);
            },
            success: function(json) {
                if (json['error']) {
                    alert(json['error']);
                }

                if (json['success']) {
                    alert(json['success']);

                    $('#button-refresh').trigger('click');
                }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
            }
        });
    }
});
//--></script>
