var KTAppNewRoleEdit = function () {
    var jsonURL = $('#urlListData').attr('data-info');
    var crudUrlTemplate = JSON.parse(jsonURL);
    var id = new URLSearchParams(window.location.search).get('id');
    var _officeAdd;
    var _handleOfficeAddForm = function(e) {
    var validation;
    var form = document.getElementById('kt_modal_edit_newrole_form');
       // Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
       validation = FormValidation.formValidation(
             form,
             {
                fields: {
                    role_type: {
                         validators: {
                            notEmpty: {
                               message: 'This field is required'
                            },
                            regexp: {
                              regexp: /^[-+.,)@:\/&?''=""( A-Za-z0-9]{1,100}$/,
                             message: 'This field can consist of alphabetical characters, spaces, max 100 characters only'
                          },
                         },
                   },
                   sort_order: {
                     validators: {
                         notEmpty: {
                             message: 'This field is required'
                         },
                         regexp: {
                           regexp: /^-?\d{1,3}$/,
                           message: 'This field can consist of number characters only'
                        },
                         },
                     },
                },
                plugins: {
                   trigger: new FormValidation.plugins.Trigger(),
                   bootstrap: new FormValidation.plugins.Bootstrap5()
                }
             }
       );
       $('.submit-newrole-btn').click( function(e) {
             e.preventDefault();
             validation.validate().then(function(status) {
                if (status == 'Valid') {
                   submitButton.setAttribute('data-kt-indicator', 'on');
                   submitButton.disabled = true;
                   //$('#examAddModal').modal('hide');
                    $('#loading').addClass('loading');
                    $('#loading-content').addClass('loading-content');
                axios.post(crudUrlTemplate.update+'?id='+id,
                        new FormData(form),{
                   }).then(function (response) {
                   if (response.data.status == 200) {
                     $('#loading').removeClass('loading');
                     $('#loading-content').removeClass('loading-content');
                      toastr.success(
                         "New Role Edit successfully!", 
                         "New Role!", 
                         {timeOut: 0, extendedTimeOut: 0, closeButton: true, closeDuration: 0}
                      );
                      setTimeout(function() {
                         if (history.scrollRestoration) {
                            history.scrollRestoration = 'manual';
                         }
                         location.href = 'new-role-list'; // reload page
                      }, 1500);
                      
                   } else {
                      toastr.error(
                        response.data.message, 
                        $('#loading').removeClass('loading'),
                        $('#loading-content').removeClass('loading-content'),
                         "Something went wrong!", 
                         {timeOut: 1, extendedTimeOut: 0, closeButton: true, closeDuration: 0}
                      );
                      }
                   })
                   .catch(function (error) {
                        $('#loading').removeClass('loading');
                        $('#loading-content').removeClass('loading-content');
                        for(var field in error.response.data.errors) {
                           if (error.response.data.errors.hasOwnProperty(field)) {
                           error.response.data.errors[field].forEach(function (errorMessage) {
                              toastr.error(
                                       errorMessage,
                                       {timeOut: 2, extendedTimeOut: 0, closeButton: true, closeDuration: 0}
                                 );
                           });
                           }
                        }
                      }).then(() => {
                            // Hide loading indication
                            submitButton.removeAttribute('data-kt-indicator');
                            // Enable button
                            submitButton.disabled = false;
                      });
                   } else {
                        $('#loading').removeClass('loading'),
                        $('#loading-content').removeClass('loading-content'),
                         toastr.error(
                              "Some fields are required", 
                              "Something Require!",
                               {timeOut: 1, extendedTimeOut: 0, closeButton: true, closeDuration: 0}
                            );
                      }
                })
             });
       }
 
 // Cancel button handler
 return {
         init: function () {
             _officeAdd = $('#kt_modal_edit_newrole_form');
             _handleOfficeAddForm();
             submitButton = document.querySelector('#kt_edit_newrole_submit');
             // Handle forms
         }
     };
 }();
 // On document ready
 jQuery(document).ready(function() {
     KTAppNewRoleEdit.init();
 });