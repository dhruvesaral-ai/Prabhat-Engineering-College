var base_url                = window.location.origin;
const arr                   = [48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 8, 46, 39, 44];
const extensions            = ["png", "jpeg", "jpg", "gif", "psd", "raw"];
var imageExtensionArray     =  ["image/png", "image/jpeg", "image/jpg", "image/gif", "image/psd"];
var docExtensionArray       =  ["application/msword", "application/vnd.openxmlformats-officedocument.wordprocessingml.document", "application/vnd.ms-powerpoint", "application/vnd.ms-excel", "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet", "application/pdf", "text/csv"];
var datatableLengthArray    =  [[10, 25, 50,100, -1], [10, 25, 50,100,"All"]];

var generateRandomString = length => {
    var result = "";
    var characters =
    "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
    var charactersLength = characters.length;
    for (var i = 0; i < length; i++) {
        result += characters.charAt(Math.floor(Math.random() * charactersLength));
    }
    return result;
};

let showingTableInfoFontBold = {
    "lengthMenu": "Display _MENU_ records per page",
    "zeroRecords": "No record found",
    "info": "Showing <b size='2' style='font-weight:800 !important'>_START_</b> to <b size='2' style='font-weight:800 !important'>_END_</b> of <b size='2' style='font-weight:800 !important'>_TOTAL_</b>",
    "infoFiltered": "(filtered from _MAX_ total records)",
    "infoEmpty":"Showing <font size='2' style='font-weight:800 !important'>0</font> to <b size='2' style='font-weight:800 !important'>_END_</b> of <b size='2' style='font-weight:800 !important'>_TOTAL_</b>"
    };

var uploadFileGetExtension = (file) => {
    return file.name.split('.').pop().toLowerCase();
}
var showValidationErrors = (array, title) => {

    if (title == "customer") {
        for (var prop in array) {
            var div = document.createElement("div");
            div.setAttribute("class", "help-block");
            div.style.color = "#f96868";
            div.innerHTML = array[prop][0];
            if (document.getElementsByName(prop).length == 0) {
                var split = prop.split("@")[0];
                if (split == "item_file") {
                    toastr.error(array[prop][0]);
                    return false;
                } else {
                    toastr.error(
                        "Inventory Items missing in Mascot " +
                        prop.split(".")[0].split("@")[1]
                        );
                    return false;
                }
            }
            var element = document.querySelector("[name='" + prop + "']");
            if (element.hasAttribute("data-select2-id")) {
                element.parentNode.append(div);
            } else {
                insertAfter(div, element);
            }
            
        }
        return false;
    } else if (title == 'contact') {
        $('form .contact__msg').show().removeClass(' alert-danger');
        $('form .contact__msg').show().removeClass(' alert-success');  
        $('form .contact__msg').show().addClass(' alert-warning');
        $('form .contact__msg').html('One or more fields are required.');
        return false;
    
    } else if (title == 'placement-requisition') {
        $('#placement_requisition_form .contact__msg').show().removeClass(' alert-danger');
        $('#placement_requisition_form .contact__msg').show().removeClass(' alert-success');  
        $('#placement_requisition_form .contact__msg').show().addClass(' alert-warning');
        $('#placement_requisition_form .contact__msg').html('One or more fields are required.');
        return false;
    
    }  else if (title == 'subscribe') {
        $("#subscribe_error").show().removeClass('text-success');       
        $("#subscribe_error").show().removeClass('text-danger');   
        $("#subscribe_error").show().addClass('text-warning');       
        $("#subscribe_error").html('The subscribe email field is required.'); 
        return false;
    
    }   else if (title == 'qualifications') {
        toastr.error("One or more fields are required.");
        return false;
    }    else if (title == 'research_and_publications') {
        toastr.error("One or more fields are required.");
        return false;
    }  else if (title == 'post_apply_for' ||
    title == 'persional_detail' ||
    title == 'research_and_publications' ||
    title == 'work_ex_and_references' ||
    title == 'declarations' ) {
        for (var prop in array) {
            var div = document.createElement("div");
            div.setAttribute("class", "help-block");
            div.style.color = "#f96868";
            div.innerHTML = array[prop][0];     

            if (prop.includes('.')) {
                var split_index = prop.split('.');
                var num_of_index = parseInt(split_index[(split_index.length-1)]);
                
                var ele_search = split_index[0];
                var ele = document.querySelector('[name="' + ele_search + '[]"]')?document.querySelector('[name="' + ele_search + '[]"]'):document.querySelector('[name="' + ele_search + '['+num_of_index+']"]');
                
                var ml = document.querySelectorAll('[name="' + ele_search + '[]"]');
                for (var i = 0; i <= ml.length - 1; i++) {
                    if (i == parseInt(split_index[1])) {
                        ele = ml[i];

                        if (ele.hasAttribute("data-select2-id") || ele.hasAttribute("data-live-search")) {
                            ele.parentNode.append(div);
                        } else {
                            insertAfter(div, ele);
                        }
                    }
                }
                continue;
                break;
            } 
            var element = document.querySelector("[name=" + prop + "]");

            if (element.type == 'radio') {
            let length  = document.querySelectorAll(`input[name=${element.name}]`).length;
                element = document.querySelectorAll(`input[name=${element.name}]`)[length-1];
                if (element) {
                    element = element.nextElementSibling;
                }
            }
            if (element) {
                if (element.hasAttribute("data-select2-id") || element.hasAttribute("data-live-search")) {
                    element.parentNode.append(div);
                } else {
                    insertAfter(div, element);
                }
            }         
        }
        return false;
    
    } else {

        for (var prop in array) {
            var div = document.createElement("div");
            div.setAttribute("class", "help-block");
            div.style.color = "#f96868";
            div.innerHTML = array[prop][0];

            var element = document.querySelector('[name="' + prop + '"]') ? document.querySelector('[name="' + prop + '"]') : document.getElementById(prop);
            if (element.type == 'radio') {
            let length  = document.querySelectorAll(`input[name=${element.name}]`).length;
                element = document.querySelectorAll(`input[name=${element.name}]`)[length-1];
                if (element) {
                    element = element.nextElementSibling;
                }
            }
            if (element) {
                if (element.hasAttribute("data-select2-id") || element.hasAttribute("data-live-search")) {
                    element.parentNode.append(div);
                } else {
                    insertAfter(div, element);
                }
            }
        }

        return false;
    }
};
var insertAfter = (el, referenceNode) => {
    referenceNode.parentNode.insertBefore(el, referenceNode.nextSibling);
};
document.addEventListener("click", function(e) {
    if (e.target.classList.contains("ajax")) {

        var button = e.target;

        // e.target.innerHTML = '<i class="fa fa-spinner fa-spin"></i>';
        e.target.disabled = true;
        // $('#voyager-loader').show();
        
        var data = {};
        var URL = e.target.form.getAttribute("action");
        var Method = e.target.form.getAttribute("method");
        var Id = e.target.form.getAttribute("id");
        var form = document.getElementById(Id);
        var formData = new FormData(form);

        switch (e.target.form.id) {
            case "jobApplyForm":
            if (e.target.getAttribute("data-type") == 'post_apply_for') {
                formData.append("section_type",'post_apply_for');
            } else if (e.target.getAttribute("data-type") == 'persional_detail') {
                formData.append("section_type",'persional_detail');
            } else if (e.target.getAttribute("data-type") == 'qualifications') {
                formData.append("section_type",'qualifications');
            } else if (e.target.getAttribute("data-type") == 'research_and_publications') {
                formData.append("section_type",'research_and_publications');
            } else if (e.target.getAttribute("data-type") == 'work_ex_and_references') {
                formData.append("section_type",'work_ex_and_references');
            } else if (e.target.getAttribute("data-type") == 'declarations') {
                formData.append("section_type",'declarations');
            }
            break;
        }


        formData.append("_token", document.getElementById("token").content);

        fetch(URL, {
            method: Method,
            body: formData
        }).then(response => {
            response.json().then(data => {
                // $('#voyager-loader').hide();
                e.target.disabled = false;
                // e.target.innerHTML = button;
                var errors = document.getElementsByClassName("help-block");
                for (var i = errors.length - 1; i >= 0; i--) {
                    errors[i].parentNode.removeChild(errors[i]);
                }
                if (data.response == "errors") {
                    showValidationErrors(data.errors, data.title);
                    if (data.title != 'contact' &&
                    data.title != 'subscribe' && 
                    data.title != 'alumni-registration' &&
                    data.title != 'alumni-feedback' &&
                    data.title != 'placement-requisition' && 
                    data.title != 'qualifications' && 
                    data.title != 'research_and_publications' && 
                    data.title != 'declarations' && 
                    data.title != 'post_apply_for' && 
                    data.title != 'persional_detail' && 
                    data.title != 'applicant-save') {
                        window.scrollTo(0, 0);                  
                    }
                } else if (data.response == "success") {
                    switch (data.title) {
                        case "employee-store":                        
                        if(data.redirect_url.includes('?')) {
                            window.location.href = data.redirect_url + "&q=" + data.message;
                        } else {
                            window.location.href = data.redirect_url + "?q=" + data.message;
                        }
                        break;
                        case "contact": 
                            $("#contactForm")[0].reset();            
                            $('form .contact__msg').show().removeClass(' alert-danger');
                            $('form .contact__msg').show().removeClass(' alert-warning');           
                            $('form .contact__msg').show().addClass(' alert-success');
                            $('form .contact__msg').html('Your query has been successfully sent.');
                            break;
                        case "placement-requisition": 
                            $("#placement_requisition_form")[0].reset();            
                            $('#placement_requisition_form .contact__msg').show().removeClass(' alert-danger');
                            $('#placement_requisition_form .contact__msg').show().removeClass(' alert-warning');           
                            $('#placement_requisition_form .contact__msg').show().addClass(' alert-success');
                            $('#placement_requisition_form .contact__msg').html('Your query has been successfully sent.');
                            break;
                        case "subscribe": 
                            $(".subscribeForm")[0].reset();     
                            $("#subscribe_error").show().removeClass('text-warning');       
                            $("#subscribe_error").show().removeClass('text-danger');    
                            $("#subscribe_error").show().addClass('text-success');       
                            $("#subscribe_error").html(data.message);   
                            break;
                            case "Enquiry-Form":
                            $("#enquiry-form")
                                .show()
                                .addClass("text-success");
                            $("#enquiry-form").html(data.message);
                            // $("#scheduleCallForm")[0].reset();
                            setTimeout(function () {
                                $(".outer").slideUp();
                                $("body").css("overflow", "auto");

                            }, 400);
                            document.getElementById("enquiry-form").reset();

                            break;
                        case "Schedule-Call":
                            $("#scheduleCallForm")
                                .show()
                                .addClass("text-success");
                            $("#scheduleCallForm").html(data.message);
                            // $("#scheduleCallForm")[0].reset();
                            setTimeout(function () {
                                $(".quickCall-popup-outer").slideUp();
                                $("body").css("overflow", "auto");
                            }, 400);
                            document.getElementById("scheduleCallForm").reset();
                            break;
                        case "post_apply_for":
                        showNextSection(button);
                            break;
                        case "persional_detail":
                        showNextSection(button);
                        let  teaching = document.querySelector("[name=teaching]:checked").value;
                            if (teaching == 'CISCO_Networking_Trainer') {
                                $("#UGC_NET").hide();
                                $("#CISCO_Certification").show();
                                $("#phd_certificate").hide();
                                $("#another_networking_certificate").show();
                            } else {
                                $("#UGC_NET").show();
                                $("#CISCO_Certification").hide();
                                $("#another_networking_certificate").hide();
                                $("#phd_certificate").show();
                            }
                            break;
                        case "qualifications":
                        showNextSection(button);
                            break;
                        case "research_and_publications":
                        showNextSection(button);
                            break;
                        case "work_ex_and_references":
                        let heading_name = data.parts.replace('_',' ').toUpperCase();
                        $("#apply_post_name").text(heading_name);
                        showNextSection(button);
                            break;
                        case "declarations":
                            window.location.replace("thank-you");
                            break;

                        case "employee-update":                        
                        if(data.redirect_url.includes('?')) {
                            window.location.href = data.redirect_url + "&q=" + data.message;
                        } else {
                            window.location.href = data.redirect_url + "?q=" + data.message;
                        }
                        break;
                        case "already-exists-user":  
                                swal({
                                    title: data.message,
                                    text: "This user already exists then change then click ok!",
                                    icon: "warning",
                                    buttons: true,
                                    dangerMode: true
                                }).then(willUpdate => {
                                    if (willUpdate) {
                                        let form = document.getElementById('AssignUserCreate');
                                        let formData = new FormData(form);
                                        formData.append("_token", document.getElementById("token").content);
                                        fetch(`${data.update_url}`,
                                            {
                                                method:"POST",
                                                body: formData
                                            }).then(response => {
                                            response.json().then(data => {
                                                if (data.response == "success") {

                                                    swal(data.message, {
                                                        icon: "success"
                                                    }).then(response => {
                                                        if (data) {
                                                            location.reload();
                                                        }
                                                    });
                                                } else if (data.response == "failure") {
                                                    var span = document.createElement("span");
                                                    span.innerHTML =
                                                    data.message +
                                                    "<br>" +
                                                    "Error Hint:" +
                                                    data.log +
                                                    "<br>";
                                                    swal(span);
                                                }
                                            });
                                        });
                                    }
                                });                   
                        // if(data.redirect_url.includes('?')) {
                        //     window.location.href = data.redirect_url + "&q=" + data.message;
                        // } else {
                        //     window.location.href = data.redirect_url + "?q=" + data.message;
                        // }
                        break;
                        default:
                        if(data.redirect_url.includes('?')) {
                            window.location.href = data.redirect_url + "&q=" + data.message;
                        } else {
                            window.location.href = data.redirect_url + "?q=" + data.message;
                        }
                    }
                } else if (data.response == "failure") {
                    switch (data.title) {
                        case "contact":
                        $('form .contact__msg').show().removeClass(' alert-success');
                        $('form .contact__msg').show().removeClass(' alert-warning');
                        $('form .contact__msg').show().addClass(' alert-danger');
                        $('form .contact__msg').html('Something went wrong.');
                        break;
                        case "subscribe":
                        $("#subscribe_error").show().removeClass('text-success');       
                        $("#subscribe_error").show().removeClass('text-warning');    
                        $("#subscribe_error").show().addClass('text-danger');       
                        $("#subscribe_error").html(data.message);    
                        break;
                    }
                    toastr.error(data.message);
                }
            });
        });
    }
});
// For record deletion purposes
document.addEventListener("click", e => {
    if (e.target.classList.contains("data-delete")) {

        var Url = e.target.getAttribute("data-url");
        var id = e.target.getAttribute("data-id");
        swal({
            title: "Are you sure?",
            text: "Once deleted, you will not be able to recover this record!",
            icon: "warning",
            buttons: true,
            dangerMode: true
        }).then(willDelete => {
            if (willDelete) {
                fetch(Url + "?id=" + id).then(response => {
                    response.json().then(data => {
                        if (data.response == "success") {

                            swal(data.message, {
                                icon: "success"
                            }).then(response => {
                                if (data) {
                                    location.reload();
                                }
                            });
                        } else if (data.response == "failure") {
                            var span = document.createElement("span");
                            span.innerHTML =
                            data.message +
                            "<br>" +
                            "Error Hint:" +
                            data.log +
                            "<br>";
                            swal(span);
                        }
                    });
                });
            }
        });
    }
});

var toastMessage = () => {
    if (document.URL.includes("?q=")) {
        toastr.success(decodeURI(window.location.search.split("=")[1]));
        window.history.pushState({}, document.title, "" + window.location.pathname);
    }

    if(document.URL.includes('&q=')) {
       toastr.success(decodeURI(window.location.search.split("=")[2]));
       const urlParams = new URLSearchParams(location.search);
       for (const [key, value] of urlParams) {
        let addQueryString = '';
        if (value != '' && value != null) {
           addQueryString = window.location.search.split("&q")[0];
           window.history.replaceState({}, document.title, "" + window.location.pathname+addQueryString);
       }

   }
}
};

var number_only = () => {
    ['paste', 'keypress'].forEach(function(type, index) {
        document.addEventListener(type, e => {
            if (e.target.classList.contains("number_only")) {
                if (e.type == 'keypress') {
                    if (!arr.includes(e.keyCode)) {
                        e.preventDefault();
                    }
                } else if (e.type == 'paste') {
                    const clipboardData = event.clipboardData || window.clipboardData;
                    const pastedData    = clipboardData.getData('Text');
                    if (isNaN(pastedData)) {
                        event.preventDefault();
                    } else {
                        return;
                    }
                }
            }
        });
    });
};

var text_only = () => {

    ['paste', 'keypress'].forEach(function(type, index) {

        document.addEventListener(type, e => {
            if (e.target.classList.contains("text_only")) {
                if (e.type == 'keypress') {
                    const specialCharKeys    = [33, 34, 35, 36, 37, 38, 40, 41, 42, 43, 45, 46, 47, 58, 60, 62, 63, 64, 94, 95, 123, 124, 125, 126];
                    const allSpecialCharKeys = arr.concat(specialCharKeys);
                    const uniqueKeys         = Array.from(new Set(allSpecialCharKeys));
                    if (uniqueKeys.includes(e.keyCode) /*|| e.shiftKey==1 */ ) {
                        e.preventDefault();
                    }
                } else if (e.type == 'paste') {
                    const clipboardData = event.clipboardData || window.clipboardData;
                    const pastedData    = clipboardData.getData('Text');
                    const specialChars  = /[ `!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?~]/;
                    const numbers       = /\d/;
                    if (specialChars.test(pastedData) || numbers.test(pastedData)) {
                        e.preventDefault();
                    }
                }
            }
        });
    });
};

toastMessage();
number_only();
text_only();


function zeroPad(num) {
  return num.toString().padStart(2, "0");
}


function checkValue(str, max) {
    if (str.charAt(0) !== '0' || str == '00') {
        var num = parseInt(str);
        if (isNaN(num) || num <= 0 || num > max) num = 1;
        str = num > parseInt(max.toString().charAt(0)) && num.toString().length == 1 ? '0' + num : num.toString();
    };

    return str;
};

function dataURLtoFile(dataurl,filename) {

    var arr = dataurl.split(','),
    mime = arr[0].match(/:(.*?);/)[1],
    bstr = atob(arr[1]), 
    n = bstr.length, 
    u8arr = new Uint8Array(n);

    while(n--){
        u8arr[n] = bstr.charCodeAt(n);
    }
    
    return new File([u8arr], filename, {type:mime});
}



/** Generate random number */
function generateRandomNumber() {
    return Math.floor(Math.random() * 10000000000);
}

// time convert to hours and minutes
function timeConvertUsingMillseconds(millseconds , time_type) {
    let h = Math.floor(millseconds/1000/60/60);
    let m = Math.floor((millseconds/1000/60/60 - h)*60);
    let s = Math.floor(((millseconds/1000/60/60 - h)*60 - m)*60);
    switch (time_type)
    {
     case "h":
     return h;
     break;
     case "m":
     return m;
     break;
     case "s":
     return s;
     break;
 }
}

// stop enter key
function stopEnterKey() {
    $(document).on('keypress', 'input[name="search_text"]', function (e) {
        if (e.which == 13) e.preventDefault();
    });
}

function showNextSection(currentBtn)
{
      let current_fs, next_fs, previous_fs;
      let left, opacity, scale;
      let animating;
          if (animating) return false;
          animating = true;
          current_fs = $(currentBtn).parent();
          next_fs = $(currentBtn).parent().next();
          //activate next step on progressbar using the index of next_fs
          $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
          //show the next fieldset
          next_fs.show();
          //hide the current fieldset with style
          current_fs.animate({
              opacity: 0
          }, {
              step: function (now, mx) {
                  //as the opacity of current_fs reduces to 0 - stored in "now"
                  //1. scale current_fs down to 80%
                  scale = 1 - (1 - now) * 0.2;
                  //2. bring next_fs from the right(50%)
                  left = (now * 50) + "%";
                  //3. increase opacity of next_fs to 1 as it moves in
                  opacity = 1 - now;
                  current_fs.css({
                      'transform': 'scale(' + scale + ')',
                      'position': 'absolute'
                  });
                  next_fs.css({
                      'left': left,
                      'opacity': opacity
                  });
              },
              duration: 800,
              complete: function () {
                  current_fs.hide();
                  animating = false;
              },
              //this comes from the custom easing plugin
              easing: 'easeInOutBack'
          });
}