var photo_counter = 0;
Dropzone.options.realDropzone = {

    uploadMultiple: false,
    parallelUploads: 100,
    maxFilesize: 8,
    autoProcessQueue: false,
    previewsContainer: '#dropzonePreview',
    previewTemplate: document.querySelector('#preview-template').innerHTML,
    addRemoveLinks: true,
    dictRemoveFile: 'Remove',
    dictFileTooBig: 'Image is bigger than 8MB',

    // The setting up of the dropzone
    init:function() {

      var myDropzone = this;

      $('#submitfiles').on("click", function (e) {

        e.preventDefault();
        e.stopPropagation();

        if(myDropzone.getQueuedFiles().length > 0){
          myDropzone.processQueue();
            myDropzone.on("success", function(data,file) {
                window.location.href = "../../product";
            });

        }else{
          alert('No Files to upload!');
        }

      });
        this.on("removedfile", function(file,s) {
            console.log(file);
            // console.log(file);
            $.ajax({
                type: 'POST',
                url: 'upload/delete',
                data: {id: file.name, _token: $('#csrf-token').val()},
                dataType: 'html',
                success: function(data){
                    var rep = JSON.parse(data);
                    if(rep.code == 200)
                    {
                        photo_counter--;
                        $("#photoCounter").text( "(" + photo_counter + ")");
                    }

                }
            });

        } );

    }
}
