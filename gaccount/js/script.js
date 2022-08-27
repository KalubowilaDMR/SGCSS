

//Toggle Page on side bar collapse
$(document).ready(function () {
    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
    });
});


// JavaScript for disabling form submissions if there are invalid fields
(function () {
    'use strict'
  
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.querySelectorAll('.needs-validation')
  
    // Loop over them and prevent submission
    Array.prototype.slice.call(forms)
      .forEach(function (form) {
        form.addEventListener('submit', function (event) {
          if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
          }
  
          form.classList.add('was-validated')
        }, false)
      })
  })()

// selecting the date and time for appoinment form
$(function () {
    $('#datetimepicker4').datetimepicker();
});

// selecting the date and time for appoinment form
$(function () {
  $('#datetime').datetimepicker({
    yearStart: 2021,
    allowTimes: ['09.00','10.00','11.00','12.00','13.00','14.00','15.00','16.00'],
    disabledWeekDays: [0,1,3,5,],
    minDate: new Date()
  });
});


//................ JQuerry Datatables list start ...............

//...... appointment tables list start ......
$(document).ready( function () {
  $('#todayAppointment').DataTable();
});


$(document).ready( function () {
  $('#appointmentList').DataTable();
});

$(document).ready( function () {
  $('#approvedApList').DataTable();
});

$(document).ready( function () {
  $('#rejectApList').DataTable();
});

$(document).ready( function () {
  $('#complainTable').DataTable();
});
//...... appointment tables list end ......

//...... rural info tables start ......

                                  //.......... rural1 start ..........
  $(document).ready(function(){
    $('#personTable').DataTable({
      "bDestroy": true,
      dom:'Bfrtip',
      buttons:[
        // 'print'
        {
          extend: 'excelHtml5',
          exportOptions: {
            columns: [ 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14 ]
          }
        },
        {
          extend: 'print',
              orientation: 'landscape',
              exportOptions: {
                columns: [ 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14 ]
              }
          },
        ],
      
        "columnDefs": [
          {
            "targets": [ 0 ],
            "visible": true,
            "searchable": false
          }
        ]
    });
  });
                                //.......... rural1 end ..........

                                //.......... rural2 start ..........
  $(document).ready(function(){
    $('#abroadTable').DataTable({
          'bDestroy':true,
          dom:'Bfrtip',
          buttons:[
              // 'print'
              {
              extend: 'excelHtml5',
              exportOptions: {
                  columns: [ 1, 2, 3, 4, 5,6 ]
              }
              },
              {
              extend: 'print',
              orientation: 'landscape',
              exportOptions: {
                  columns: [ 1, 2, 3, 4, 5,6 ]
              }
              },
          ],
          "columnDefs": [
                  {
                      "targets": [ 0 ],
                      "visible": true,
                      "searchable": false
                  }
              ]
    });
  });

                                //.......... rural2 end ..........

                                //.......... rural3 start ..........
  $(document).ready(function(){
    $('#infTable').DataTable({
        'bDestroy': true,
        dom:'Bfrtip',
        buttons:[
            // 'print'
            {
                extend: 'excelHtml5',
                exportOptions: {
                    columns: [ 1, 2, 3, 4, 5 ]
                }
            },
            {
                extend: 'print',
                orientation: 'landscape',
                exportOptions: {
                    columns: [ 1, 2, 3, 4, 5 ]
                }
            },
        ],
        "columnDefs": [
            {
                "targets": [ 0 ],
                "visible": true,
                "searchable": false
            }
        ]
    });
  });
                                //.......... rural3 end ..........

                                //.......... rural4 start ..........
  $(document).ready(function(){
    $('#homeTable').DataTable({
        "bDestroy": true,
        dom:'Bfrtip',
        buttons:[
            // 'print'
            {
                extend: 'excelHtml5',
                exportOptions: {
                    columns: [ 1, 2, 3, 4, 5, 6, 7, 8, 9, 10 ]
                }
            },
            {
                extend: 'print',
                orientation: 'landscape',
                exportOptions: {
                    columns: [ 1, 2, 3, 4, 5, 6, 7, 8, 9, 10 ]
                }
            },
        ]
    });
  });
                                //.......... rural4 end ..........

                                //.......... rural5 start ..........
  $(document).ready(function(){
    $('#landTable').DataTable({
        'bDestroy': true,
        dom:'Bfrtip',
        buttons:[
            // 'print'
            {
                extend: 'excelHtml5',
                exportOptions: {
                    columns: [ 1, 2, 3, 4, 5, 6, 7 ]
                }
            },
            {
                extend: 'print',
                orientation: 'landscape',
                exportOptions: {
                    columns: [ 1, 2, 3, 4, 5, 6, 7 ]
                }
            },
        ]
    });
  });
                                //.......... rural5 end ..........

                                //.......... rural6 start ..........
  $(document).ready(function(){
    $('#cultiTable').DataTable({
      'bDestroy': true,
      dom:'Bfrtip',
      buttons:[
          // 'print'
          {
              extend: 'excelHtml5',
              exportOptions: {
                  columns: [ 1, 2, 3, 4, 5, 6, 7 ]
              }
          },
          {
              extend: 'print',
              orientation: 'landscape',
              exportOptions: {
                  columns: [ 1, 2, 3, 4, 5 ,6 , 7 ]
              }
          },
      ]
    });
  });
                                //.......... rural6 end ..........

                                //.......... rural7 start ..........
  $(document).ready(function(){
    $('#vehicleTable').DataTable({
        'bDestroy': true,
        dom:'Bfrtip',
        buttons:[
            // 'print'
            {
                extend: 'excelHtml5',
                exportOptions: {
                    columns: [ 1, 2, 3, 4, 5, 6 ]
                }
            },
            {
                extend: 'print',
                orientation: 'landscape',
                exportOptions: {
                    columns: [ 1, 2, 3, 4, 5, 6 ]
                }
            },
        ]
    });
  });
                                //.......... rural7 end ..........

                                //.......... rural8 start ..........
  $(document).ready(function(){
    $('#sportTable').DataTable({
        'bDestroy': true,
        dom:'Bfrtip',
        buttons:[
            // 'print'
            {
                extend: 'excelHtml5',
                exportOptions: {
                    columns: [ 1, 2, 3 ]
                }
            },
            {
                extend: 'print',
                orientation: 'landscape',
                exportOptions: {
                    columns: [ 1, 2, 3 ]
                }
            },
        ]
    });
  });
                                //.......... rural8 end ..........

                                //.......... rural9 start ..........
  $(document).ready(function(){
    $('#courseTable').DataTable({
        dom:'Bfrtip',
        buttons:[
            // 'print'
            {
                extend: 'excelHtml5',
                exportOptions: {
                    columns: [ 1, 2, 3, 4 ]
                }
            },
            {
                extend: 'print',
                orientation: 'landscape',
                exportOptions: {
                    columns: [ 1, 2, 3, 4 ]
                }
            },
        ]
    });
  });
                                //.......... rural9 end ..........

                                //.......... rural10 start ..........
  $(document).ready(function(){
    $('#animaltable').DataTable({
        dom:'Bfrtip',
        buttons:[
            // 'print'
            {
            extend: 'excelHtml5',
            exportOptions: {
                columns: [ 1, 2, 3 ]
            }
            },
            {
            extend: 'print',
            orientation: 'landscape',
            exportOptions: {
                columns: [ 1, 2, 3 ]
            }
            },
        ]
    });
  });
                                //.......... rural10 end ..........

    
//...... rural info tables end ......

//..... spouse people dataTable start .....
$(document).ready( function () {
    $('#spouseTable').DataTable();
} );
//..... spouse people dataTable end .....

//..... voting people list dataTable start .....
$(document).ready( function () {
    $('#votingTable').DataTable();
} );
//..... widow people list dataTable end .....

//..... voting people list dataTable start .....
$(document).ready( function () {
    $('#widowTable').DataTable();
} );
//..... widow people list dataTable end .....

//..... death people list dataTable start .....
$(document).ready( function () {
    $('#dethListTable').DataTable();
} );
//.....death people list dataTable end .....

//................ JQuerry Datatables list end ...............


//................ page reload function here ................
function availableReload(){
    document.getElementById('online').value = '';
    document.getElementById('offline').value = '';
}

function r1reload(){
  document.getElementById('homeNo').value = '';
  document.getElementById('address').value = '';
  document.getElementById('fullName').value = '';
  document.getElementById('genderselect').value = '';
  document.getElementById('nation').value = '';
  document.getElementById('relegion').value = '';
  document.getElementById('bday').value = '';
  document.getElementById('nic').value = '';
  document.getElementById('status').value = '';
  document.getElementById('spouse').value = '';
  document.getElementById('edu').value = '';
  document.getElementById('job').value = '';
  document.getElementById('office').value = '';
  document.getElementById('grade').value = '';
}

function r1updateReload(){
  document.getElementById('phomeNo').value = '';
  document.getElementById('paddress').value = '';
  document.getElementById('pfullName').value = '';
  document.getElementById('pgender').value = '';
  document.getElementById('pnation').value = '';
  document.getElementById('prelegion').value = '';
  document.getElementById('pbday').value = '';
  document.getElementById('pnic').value = '';
  document.getElementById('pstatus').value = '';
  document.getElementById('pspouse').value = '';
  document.getElementById('pedu').value = '';
  document.getElementById('pjob').value = '';
  document.getElementById('poffice').value = '';
  document.getElementById('pgrade').value = '';
}

function r2reload(){
  document.getElementById('homeNo').value='';
  document.getElementById('fullName').value='';
  document.getElementById('nic').value='';
  document.getElementById('country').value='';
  document.getElementById('job').value='';
  document.getElementById('year').value='';
}

function r2updateReload(){
  document.getElementById('aHomeNo').value='';
  document.getElementById('aFullName').value='';
  document.getElementById('aNic').value='';
  document.getElementById('aCountry').value='';
  document.getElementById('aJob').value='';
  document.getElementById('aYear').value='';
}

function r3reload(){
  document.getElementById('homeNo').value= '';
  document.getElementById('fullName').value= '';
  document.getElementById('nic').value= '';
  document.getElementById('infirm').value= '';
  document.getElementById('infirmYear').value= '';
}

function r3updateReload(){
  document.getElementById('infHomeNo').value='';
  document.getElementById('infFullName').value='';
  document.getElementById('infNic').value='';
  document.getElementById('infReason').value='';
  document.getElementById('Year').value=''; 
}

function r4reload(){
  document.getElementById('homeNo').value= '';
  document.getElementById('hType').value= '';
  document.getElementById('wallType').value= '';
  document.getElementById('floorType').value= '';
  document.getElementById('roofType').value= '';
  document.getElementById('currentType').value= '';
  document.getElementById('waterType').value= '';
  document.getElementById('toiletType').value= '';
  document.getElementById('telType').value= '';
  document.getElementById('phone').value= '';
}

function r4updateReload(){
  document.getElementById('hid').value= '';
  document.getElementById('h_homeNo').value= '';
  document.getElementById('h_hType').value= '';
  document.getElementById('h_wallType').value= '';
  document.getElementById('h_floorType').value= '';
  document.getElementById('h_roofType').value= '';
  document.getElementById('h_currentType').value= '';
  document.getElementById('h_waterType').value= '';
  document.getElementById('h_toiletType').value= '';
  document.getElementById('h_telType').value= '';
  document.getElementById('h_phone').value= '';
}

function r5reload(){
  document.getElementById('homeNo').value='';
  document.getElementById('landOwner').value='';
  document.getElementById('landName').value='';
  document.getElementById('landSize').value='';
  document.getElementById('office').value='';
  document.getElementById('landNumber').value='';
  document.getElementById('landOffice').value='';
}

function r5updateReload(){
  document.getElementById('lID').value='';
  document.getElementById('h_homeNo').value='';
  document.getElementById('h_landOwner').value='';
  document.getElementById('h_landName').value='';
  document.getElementById('h_landSize').value='';
  document.getElementById('h_office').value='';
  document.getElementById('h_landNumber').value='';
  document.getElementById('h_landOffice').value='';
}

function r6reload(){
  document.getElementById('homeNo').value= '';
  document.getElementById('landOwner').value= '';
  document.getElementById('landName').value= '';
  document.getElementById('nic').value= '';
  document.getElementById('landType').value= '';
  document.getElementById('landSize').value= '';
}

function r6updateReload(){
  document.getElementById('cId').value= '';
  document.getElementById('c_homeNo').value= '';
  document.getElementById('c_landOwner').value= '';
  document.getElementById('c_nic').value= '';
  document.getElementById('c_landName').value= '';
  document.getElementById('c_landNumber').value= '';
  document.getElementById('c_landType').value= '';
  document.getElementById('c_landSize').value= '';
}

function r7reload(){
  document.getElementById('homeNo').value= '';
  document.getElementById('vehOwner').value= '';
  document.getElementById('nic').value= '';
  document.getElementById('vehBrand').value= '';
  document.getElementById('regYear').value= '';
  document.getElementById('madeYear').value= '';
}

function r7updateReload(){
  document.getElementById('vID').value= '';
  document.getElementById('v_homeNo').value= '';
  document.getElementById('v_vehOwner').value= '';
  document.getElementById('v_nic').value= '';
  document.getElementById('v_vehBrand').value= '';
  document.getElementById('v_regYear').value= '';
  document.getElementById('v_madeYear').value= '';
}

function r8reload(){
  document.getElementById('homeNo').value = '';
  document.getElementById('player').value = '';
  document.getElementById('sports').value = '';
}

function r8updateReload(){
  document.getElementById('sID').value = '';
  document.getElementById('s_homeNo').value = '';
  document.getElementById('s_player').value = '';
  document.getElementById('s_sports').value = '';
}

function r9reload(){
  document.getElementById('homeNo').value = '';
  document.getElementById('name').value = '';
  document.getElementById('nic').value = '';
  document.getElementById('course').value = '';
  document.getElementById('courseDuration').value = '';
}

function r9updateReload(){
  document.getElementById('c_id').value = '';
  document.getElementById('c_homeNo').value = '';
  document.getElementById('c_name').value = '';
  document.getElementById('c_nic').value = '';
  document.getElementById('c_course').value = '';
  document.getElementById('c_courseDuration').value = '';
}

function r10reload(){
  document.getElementById('homeNo').value = '';
  document.getElementById('animal').value = '';
  document.getElementById('homeNo').value = '';
}

function r10updateReload(){
  document.getElementById('a_id').value = '';
  document.getElementById('a_homeNo').value = '';
  document.getElementById('a_animal').value = '';
  document.getElementById('a_animalSize').value = '';
}

//..... deathList.php textbox value clear start .....
function reloadInsertDeath(){
    document.getElementById('homeNo').value = '';
    document.getElementById('deathDate').value = '';
    document.getElementById('deathPlace').value = '';
    document.getElementById('address').value = '';
    document.getElementById('fullName').value = '';
    document.getElementById('genderselect').value = '';
    document.getElementById('age').value = '';
    document.getElementById('nic').value = '';
    document.getElementById('job').value = '';
    document.getElementById('reason').value = '';
    document.getElementById('infoPerson').value = '';
    document.getElementById('infoAddress').value = '';
}

function reloadUpdateDeath(){
    document.getElementById('d_id').value = '';
    document.getElementById('uhomeNo').value = '';
    document.getElementById('udeathDate').value = '';
    document.getElementById('udeathPlace').value = '';
    document.getElementById('uaddress').value = '';
    document.getElementById('ufullName').value = '';
    document.getElementById('ugenderselect').value = '';
    document.getElementById('uage').value = '';
    document.getElementById('unic').value = '';
    document.getElementById('ujob').value = '';
    document.getElementById('ureason').value = '';
    document.getElementById('uinfoPerson').value = '';
    document.getElementById('uinfoAddress').value = '';
}
//..... deathList.php textbox value clear end .....

//................ page reload function end ................

// diable the unmarried value status rPage1 file
function r1disablestatus(){

  var unmarried = document.getElementById('status');
  if(unmarried.value=="අවිවාහකයි"){

       document.getElementById('spouse').disabled= true;
       document.getElementById('spouse').value= '';

  }
  else{
       document.getElementById('spouse').disabled= false;
  }

  var updateUnmarried = document.getElementById('pstatus');
  if(updateUnmarried.value=="අවිවාහකයි"){

       document.getElementById('pspouse').disabled= true;
       document.getElementById('pspouse').value= '';

  }
  else{
       document.getElementById('pspouse').disabled= false;
  }

}


//.......... datatable click row with select data start ..........

//..... r1 page start .....
  $('#personTable tbody').on( 'click', 'tr', function () {
              
              
    var pId = $(this).find("#pId").text();
    var homeNo = $(this).find("#hNo").text();
    var address = $(this).find("#address").text();
    var fullName = $(this).find("#name").text();
    var gender = $(this).find("#gender").text();
    var nation = $(this).find("#pNation").text();
    var relegion = $(this).find("#pReligion").text();
    var bday = $(this).find("#bday").text();
    var nic = $(this).find("#nic").text();
    var status = $(this).find("#pStatus").text();
    var spouse = $(this).find("#spouse").text();
    var edu = $(this).find("#pEdu").text();
    var job = $(this).find("#job").text();
    var office = $(this).find("#job-place").text();
    var grade = $(this).find("#edu-grade").text();
    
    document.getElementById('uid').value= pId;
    document.getElementById('phomeNo').value= homeNo;
    document.getElementById('paddress').value= address;
    document.getElementById('pfullName').value= fullName;
    document.getElementById('pbday').value= bday;
    document.getElementById('pnic').value= nic;
    document.getElementById('pspouse').value= spouse;
    document.getElementById('pjob').value= job;
    document.getElementById('poffice').value= office;
    document.getElementById('pgrade').value= grade;

    
    // alert(nic);
    
    // document.getElementById('uid').value= nic;


        switch (gender) {
            case "පුරුෂ":
                document.getElementById('pgender').selectedIndex = 1;
                break;
            case "ස්ත්‍රී":
                document.getElementById('pgender').selectedIndex = 2;
                break;
            default:
                document.getElementById('pgender').selectedIndex = 0;
        }

        switch (nation) {
            case "සිංහල":
                document.getElementById('pnation').selectedIndex = 1;
                break;
            case "දෙමළ":
                document.getElementById('pnation').selectedIndex = 2;
                break;
            case "මුස්ලිම්":
                document.getElementById('pnation').selectedIndex = 3;
                break;
            default:
                document.getElementById('pnation').selectedIndex = 0;
        }
        // console.log(userType); // Tuesday

        switch (relegion) {
            case "බුද්ධාගම":
                document.getElementById('prelegion').selectedIndex = 1;
                break;
            case "හිංදු ආගම":
                document.getElementById('prelegion').selectedIndex = 2;
                break;
            case "ක්‍රිස්තියානි ආගම":
                document.getElementById('prelegion').selectedIndex = 3;
                break;
            case "ඉස්ලාම් ආගම":
                document.getElementById('prelegion').selectedIndex = 4;
                break;
            default:
                document.getElementById('prelegion').selectedIndex = 0;
        }


        switch (status) {
            case "විවාහකයි":
                document.getElementById('pstatus').selectedIndex = 1;
                break;
            case "අවිවාහකයි":
                document.getElementById('pstatus').selectedIndex = 2;
                break;
            case "වැන්දඹු":
                document.getElementById('pstatus').selectedIndex = 3;
                break;
            default:
                document.getElementById('pstatus').selectedIndex = 0;
        }


        switch (edu) {
            case "සමාන්‍යපෙළට අඩු":
                document.getElementById('pedu').selectedIndex = 1;
                break;
            case "සමාන්‍යපෙළ සමත්":
                document.getElementById('pedu').selectedIndex = 2;
                break;
            case "උසස්පෙළ සමත්":
                document.getElementById('pedu').selectedIndex = 3;
                break;
            case "උපාධිධාරි":
                document.getElementById('pedu').selectedIndex = 4;
                break;
            default:
                document.getElementById('pedu').selectedIndex = 0;
        }


  });
//..... r1 page end .....

//..... r2 page start .....
  $('#abroadTable tbody').on( 'click', 'tr', function () {
            
    var ab_id = $(this).find("#ab_id").text();
    var thNo = $(this).find("#thNo").text();
    var tname = $(this).find("#tname").text();
    var tnic = $(this).find("#tnic").text();
    var tcountry = $(this).find("#tcountry").text();
    var toccupation = $(this).find("#toccupation").text();
    var tabroadYear = $(this).find("#tabroadYear").text();
        
    document.getElementById('aid').value= ab_id;
    document.getElementById('aHomeNo').value= thNo;
    document.getElementById('aFullName').value= tname;
    document.getElementById('aNic').value= tnic;
    document.getElementById('aCountry').value= tcountry;
    document.getElementById('aJob').value= toccupation;
    document.getElementById('aYear').value= tabroadYear;
        
    // alert(nic);
    
  });
//..... r2 page end .....

//..... r3 page start .....
  $('#infTable tbody').on( 'click', 'tr', function () {
            
    var tid = $(this).find("#tid").text();
    var hNo = $(this).find("#thNo").text();
    var name = $(this).find("#tname").text();
    var nic = $(this).find("#tnic").text();
    var infirm = $(this).find("#tinfirm").text();
    var infirmYear = $(this).find("#tinfirmYear").text();
                
    document.getElementById('infID').value= tid;
    document.getElementById('infHomeNo').value= hNo;
    document.getElementById('infFullName').value= name;
    document.getElementById('infNic').value= nic;
    document.getElementById('infReason').value= infirm;
    document.getElementById('Year').value= infirmYear;
    
    // alert(nic);
    
  });
//..... r3 page end .....

//..... r4 page start .....
  $('#homeTable tbody').on( 'click', 'tr', function () {
              
              
    //save the table value to variables
    var th_id = $(this).find("#h_id").text();
    var thNo = $(this).find("#thNo").text();
    var thome = $(this).find("#thome").text();
    var twall = $(this).find("#twall").text();
    var tfloor = $(this).find("#tfloor").text();
    var troof = $(this).find("#troof").text();
    var tcurrent = $(this).find("#tcurrent").text();
    var twater = $(this).find("#twater").text();
    var ttoilet = $(this).find("#ttoilet").text();
    var ttelephone = $(this).find("#ttelephone").text();
    var tphone = $(this).find("#tphone").text();

    //save the table value on modal update form
    document.getElementById('hid').value= th_id;
    document.getElementById('h_homeNo').value= thNo;
    document.getElementById('h_hType').value= thome;
    document.getElementById('h_wallType').value= twall;
    document.getElementById('h_floorType').value= tfloor;
    document.getElementById('h_roofType').value= troof;
    document.getElementById('h_currentType').value= tcurrent;
    document.getElementById('h_waterType').value= twater;
    document.getElementById('h_toiletType').value= ttoilet;
    document.getElementById('h_telType').value= ttelephone;
    document.getElementById('h_phone').value= tphone;


        switch (thome) {
            case "තනිමහල්":
                document.getElementById('h_hType').selectedIndex = 1;
                break;
            case "දෙමහල්":
                document.getElementById('h_hType').selectedIndex = 2;
                break;
            case "තෙමහල්":
                document.getElementById('h_hType').selectedIndex = 3;
                break;
            default:
                document.getElementById('h_hType').selectedIndex = 0;
        }

        switch (twall) {
            case "ගඩොල්":
                document.getElementById('h_wallType').selectedIndex = 1;
                break;
            case "සිමෙන්ති":
                document.getElementById('h_wallType').selectedIndex = 2;
                break;
            case "මැටි":
                document.getElementById('h_wallType').selectedIndex = 3;
                break;
            case "ලෑලි":
                document.getElementById('h_wallType').selectedIndex = 4;
                break;
            case "කබොක්":
                document.getElementById('h_wallType').selectedIndex = 5;
                break;
            default:
                document.getElementById('h_wallType').selectedIndex = 0;
        }
        

        switch (tfloor) {
            case "සිමෙන්ති":
                document.getElementById('h_floorType').selectedIndex = 1;
                break;
            case "ටයිල්":
                document.getElementById('h_floorType').selectedIndex = 2;
                break;
            case "ටොරාසෝ":
                document.getElementById('h_floorType').selectedIndex = 3;
                break;
            case "මැටි":
                document.getElementById('h_floorType').selectedIndex = 4;
                break;
            default:
                document.getElementById('h_floorType').selectedIndex = 0;
        }
        switch (troof) {
            case "උළු":
                document.getElementById('h_roofType').selectedIndex = 1;
                break;
            case "ටකරන්":
                document.getElementById('h_roofType').selectedIndex = 2;
                break;
            case "ඇස්බැස්ටොස්":
                document.getElementById('h_roofType').selectedIndex = 3;
                break;
            case "තාරෂීට්":
                document.getElementById('h_roofType').selectedIndex = 4;
                break;
            case "පොල්අතු":
                document.getElementById('h_roofType').selectedIndex = 5;
                break;
            default:
                document.getElementById('h_roofType').selectedIndex = 0;
        }

        switch (tcurrent) {
            case "ඇත":
                document.getElementById('h_currentType').selectedIndex = 1;
                break;
            case "නැත":
                document.getElementById('h_currentType').selectedIndex = 2;
                break;
            default:
                document.getElementById('h_currentType').selectedIndex = 0;
        }
        

        switch (twater) {
            case "ළිද":
                document.getElementById('h_waterType').selectedIndex = 1;
                break;
            case "නලජලය":
                document.getElementById('h_waterType').selectedIndex = 2;
                break;
            case "පොදු ළිද":
                document.getElementById('h_waterType').selectedIndex = 3;
                break;
            case "පොදුනලජල":
                document.getElementById('h_waterType').selectedIndex = 4;
                break;
            case "අන්සතුළිද":
                document.getElementById('h_waterType').selectedIndex = 5;
                break;
            default:
                document.getElementById('h_waterType').selectedIndex = 0;
        }


        switch (ttoilet) {
            case "ජලමුද්රිත":
                document.getElementById('h_toiletType').selectedIndex = 1;
                break;
            case "වල":
                document.getElementById('h_toiletType').selectedIndex = 2;
                break;
            case "පොදු":
                document.getElementById('h_toiletType').selectedIndex = 3;
                break;
            case "නොමැත":
                document.getElementById('h_toiletType').selectedIndex = 4;
                break;
            default:
                document.getElementById('h_toiletType').selectedIndex = 0;
        }


        switch (ttelephone) {
            case "ඇත":
                document.getElementById('h_telType').selectedIndex = 1;
                break;
            case "නැත":
                document.getElementById('h_telType').selectedIndex = 2;
                break;
            default:
                document.getElementById('h_telType').selectedIndex = 0;
        }


  });
//..... r4 page end .....

//..... r5 page start .....
  $('#landTable tbody').on( 'click', 'tr', function () {
    
    var tID = $(this).find("#tID").text();
    var thNo = $(this).find("#thNo").text();
    var tlandOwner = $(this).find("#tlandOwner").text();
    var tlandName = $(this).find("#tlandName").text();
    var tsize = $(this).find("#tsize").text();
    var toffice = $(this).find("#toffice").text();
    var tlandNo = $(this).find("#tlandNo").text();
    var tilligleOffice = $(this).find("#tilligleOffice").text();
    
    document.getElementById('lID').value= tID;
    document.getElementById('h_homeNo').value= thNo;
    document.getElementById('h_landOwner').value= tlandOwner;
    document.getElementById('h_landName').value= tlandName;
    document.getElementById('h_landSize').value= tsize;
    document.getElementById('h_office').value= toffice;
    document.getElementById('h_landNumber').value= tlandNo;
    document.getElementById('h_landOffice').value= tilligleOffice;

    
    // alert(nic);
    
    
        switch (tilligleOffice) {
            case "නිවාස අධිකාරිය":
                document.getElementById('').selectedIndex = 1;
                break;
            case "ඉඩම් ප්‍රතිසස්කරන කොමිසම් සභාව":
                document.getElementById('').selectedIndex = 2;
                break;
            default:
                document.getElementById('').selectedIndex = 0;
        }

  });
//..... r5 page end .....

//..... r6 page start .....
  $('#cultiTable tbody').on( 'click', 'tr', function () {       

    var t_cid = $(this).find("#t_cid").text();
    var t_hNo = $(this).find("#t_hNo").text();
    var t_landOwner = $(this).find("#t_landOwner").text();
    var t_nic = $(this).find("#t_nic").text();
    var t_landName = $(this).find("#t_landName").text();
    var t_landNumber = $(this).find("#t_landNumber").text();
    var t_cultivate = $(this).find("#t_cultivate").text();
    var t_landSize = $(this).find("#t_landSize").text();
    
    document.getElementById('cId').value= t_cid;
    document.getElementById('c_homeNo').value= t_hNo;
    document.getElementById('c_landOwner').value= t_landOwner;
    document.getElementById('c_nic').value= t_nic;
    document.getElementById('c_landName').value= t_landName;
    document.getElementById('c_landNumber').value= t_landNumber;
    document.getElementById('c_landType').value= t_cultivate;
    document.getElementById('c_landSize').value= t_landSize;

    
    // alert(nic);
    
    // document.getElementById('uid').value= nic;


        switch (t_cultivate) {
            case "තේ":
                document.getElementById('c_landType').selectedIndex = 1;
                break;
            case "පොල්":
                document.getElementById('c_landType').selectedIndex = 2;
                break;
            case "රබර්":
                document.getElementById('c_landType').selectedIndex = 3;
                break;
            case "වෙනත් වගා":
                document.getElementById('c_landType').selectedIndex = 4;
                break;
            default:
                document.getElementById('c_landType').selectedIndex = 0;
        }

  });
//..... r6 page end .....

//..... r7 page start .....
  $('#vehicleTable tbody').on( 'click', 'tr', function () {
          
          

    var t_id = $(this).find("#t_id").text();
    var t_hNo = $(this).find("#t_hNo").text();
    var t_vehicleOwner = $(this).find("#t_vehicleOwner").text();
    var nic = $(this).find("#t_nic").text();
    var t_vehicleType = $(this).find("#t_vehicleType").text();
    var t_regYear = $(this).find("#t_regYear").text();
    var t_madeYear = $(this).find("#t_madeYear").text();
    
    document.getElementById('vID').value= t_id;
    document.getElementById('v_homeNo').value= t_hNo;
    document.getElementById('v_vehOwner').value= t_vehicleOwner;
    document.getElementById('v_nic').value= nic;
    document.getElementById('v_vehBrand').value= t_vehicleType;
    document.getElementById('v_regYear').value= t_regYear;
    document.getElementById('v_madeYear').value= t_madeYear;
    
    
    // alert(nic);

  });
//..... r7 page end .....

//..... r8 page start .....
  $('#sportTable tbody').on( 'click', 'tr', function () {
            
    var t_id = $(this).find("#t_id").text();
    var t_hNo = $(this).find("#t_hNo").text();
    var t_name = $(this).find("#t_name").text();
    var t_sports = $(this).find("#t_sports").text();
    
    document.getElementById('sID').value= t_id;
    document.getElementById('s_homeNo').value= t_hNo;
    document.getElementById('s_player').value= t_name;
    document.getElementById('s_sports').value= t_sports;

  });
//..... r8 page end .....

//..... r9 page start .....
  $('#courseTable tbody').on( 'click', 'tr', function () {
              
    var t_cid = $(this).find("#t_cid").text();
    var t_hNo = $(this).find("#t_hNo").text();
    var t_name = $(this).find("#t_name").text();
    var t_pnic = $(this).find("#t_pnic").text();
    var t_course = $(this).find("#t_course").text();
    var t_cDuration = $(this).find("#t_cDuration").text();
    
    document.getElementById('c_id').value= t_cid;
    document.getElementById('c_homeNo').value= t_hNo;
    document.getElementById('c_name').value= t_name;
    document.getElementById('c_nic').value= t_pnic;
    document.getElementById('c_course').value= t_course;
    document.getElementById('c_courseDuration').value= t_cDuration;

  });
//..... r9 page end .....

//..... r10 page start .....
  $('#animaltable tbody').on( 'click', 'tr', function () {
                    
    var t_aid = $(this).find("#t_aid").text();
    var t_hNo = $(this).find("#t_hNo").text();
    var t_animal = $(this).find("#t_animal").text();
    var t_aSize = $(this).find("#t_aSize").text();
    
    document.getElementById('a_id').value= t_aid;
    document.getElementById('a_homeNo').value= t_hNo;
    document.getElementById('a_animal').value= t_animal;
    document.getElementById('a_animalSize').value= t_aSize;

  });
//..... r10 page end .....

//..... deathList.php table value select start .....
  $('#dethListTable tbody').on( 'click', 'tr', function () {
                      
    var tid = $(this).find("#tid").text();
    var thoNo = $(this).find("#thoNo").text();
    var tdeathDate = $(this).find("#tdeathDate").text();
    var tDeathPlace = $(this).find("#tDeathPlace").text();
    var taddress = $(this).find("#taddress").text();
    var tfname = $(this).find("#tfname").text();
    var tgender = $(this).find("#tgender").text();
    var tage = $(this).find("#tage").text();
    var tnic = $(this).find("#tnic").text();
    var tjob = $(this).find("#tjob").text();
    var treason = $(this).find("#treason").text();
    var tinfoPeople = $(this).find("#tinfoPeople").text();
    var tinfoAddress = $(this).find("#tinfoAddress").text();
    
    document.getElementById('d_id').value= tid;
    document.getElementById('uhomeNo').value= thoNo;
    document.getElementById('udeathDate').value= tdeathDate;
    document.getElementById('udeathPlace').value= tDeathPlace;
    document.getElementById('uaddress').value= taddress;
    document.getElementById('ufullName').value= tfname;
    document.getElementById('ugenderselect').value= tgender;
    document.getElementById('uage').value= tage;
    document.getElementById('unic').value= tnic;
    document.getElementById('ujob').value= tjob;
    document.getElementById('ureason').value= treason;
    document.getElementById('uinfoPerson').value= tinfoPeople;
    document.getElementById('uinfoAddress').value= tinfoAddress;

    switch (tgender) {
        case "පුරුෂ":
            document.getElementById('ugenderselect').selectedIndex = 1;
            break;
        case "ස්ත්‍රී":
            document.getElementById('ugenderselect').selectedIndex = 2;
            break;
        default:
            document.getElementById('ugenderselect').selectedIndex = 0;
    }
  
  });
//..... deathList.php table value select end .....

//.......... datatable click row with select data end ..........


//.......... datatable row data delete function start ...........

//.......... rPage1 start ..........
function r1DeleteRow(clickedId){

    //Delete data from person-details table         

    var pId = clickedId;

          $.ajax(
              {
                  type:"POST",
                  url: "../ruralinfo/dropData.php",
                  data: {
                      dropId : pId,
                        },    
                      success: function (status) { 

                          console.log(status);

                          if(status == "Delete successfully"){
                              
                              swal({
                                  title: "Success!",
                                  text: "Delete Data successfully",
                                  icon: "success",
                                  button: "OK!",
                              }).then(function(){
                                  window.location = "rPage1.php";
                              });

                              // location.reload();
                          }else{
                              swal({
                                  title: "Error Occurd!",
                                  text: "There has an error. Please findout!",
                                  icon: "error",
                                  button: "OK!",
                              }).then(function(){
                                  window.location = "rPage1.php";
                              });

                              // location.reload();
                          }
                          
                              
                      },
                      error: function (jqXhr, textStatus, errorMessage) { // error callback 
                              
                          alert("System error");
                      }
              });

}
//.......... rPage1 end ..........

//.......... rPage2 start ..........
function r2DeleteRow(clickedId){

    //Delete data from abroad person-details table
   
    var ab_id = clickedId;
       // alert(ab_id);

       $.ajax(
           {
               type:"POST",
               url: "../ruralinfo/dropData.php",
               data: {
                   dro_ab_id : ab_id,
                   },    
                   success: function (status) { 

                       console.log(status);
                       // alert(status);

                       if(status == "Delete successfully"){
                           
                           swal({
                               title: "Success!",
                               text: "Delete Data successfully",
                               icon: "success",
                               button: "OK!",
                               }).then(function(){
                                   window.location = "rPage2.php";
                           });
                           
                           
                       }else{
                           
                           swal({
                               title: "Error Occurd!",
                               text: "There has an error. Please findout!",
                               icon: "error",
                               button: "OK!",
                               }).then(function(){
                                   window.location = "rPage2.php";
                           });


                       }
                       
                           
                   },
                   error: function (jqXhr, textStatus, errorMessage) { // error callback 
                           
                       alert("System error");
                   }
           });
   
}
//.......... rPage2 end ..........

//.......... rPage3 start ..........
function r3DeleteRow(clickedId){

    //Delete data from infirm person-details table

    var tid = clickedId;
    // alert(tid);

    $.ajax(
        {
            type:"POST",
            url: "../ruralinfo/dropData.php",
            data: {
                dro_inf_id : tid,
                },    
                success: function (status) { 

                    console.log(status);
                    // alert(status);

                    if(status == "Delete successfully"){
                        
                        swal({
                            title: "Success!",
                            text: "Delete Data successfully",
                            icon: "success",
                            button: "OK!",
                            }).then(function(){
                                window.location = "rPage3.php";
                        });
                        
                        
                    }else{
                        
                        swal({
                            title: "Error Occurd!",
                            text: "There has an error. Please findout!",
                            icon: "error",
                            button: "OK!",
                            }).then(function(){
                                window.location = "rPage3.php";
                        });


                    }
                    
                        
                },
                error: function (jqXhr, textStatus, errorMessage) { // error callback 
                        
                    alert("System error");
                }
        });

}
//.......... rPage3 end ..........

//.......... rPage4 start ..........
function r4DeleteRow(clickedId){

    // alert(clickedId);

    //Delete data from home_info table

    var th_id = clickedId;
    // alert(th_id);

    $.ajax(
        {
            type:"POST",
            url: "../ruralinfo/dropData.php",
            data: {
                dro_h_id : th_id,
                },    
                success: function (status) { 

                    console.log(status);
                    // alert(status);

                    if(status == "Delete successfully"){
                        
                        swal({
                            title: "Success!",
                            text: "Delete Data successfully",
                            icon: "success",
                            button: "OK!",
                            }).then(function(){
                                window.location = "rPage4.php";
                        });
                        
                        
                    }else{
                        
                        swal({
                            title: "Error Occurd!",
                            text: "There has an error. Please findout!",
                            icon: "error",
                            button: "OK!",
                            }).then(function(){
                                window.location = "rPage4.php";
                        });


                    }
                    
                        
                },
                error: function (jqXhr, textStatus, errorMessage) { // error callback 
                        
                    alert("System error");
                }
        });
}
//.......... rPage4 end ..........

//.......... rPage5 start ..........
function r5DeleteRow(clickedId){


    //Delete data from home_land_info table
    
    var tID = clickedId;
    // alert(tID);

    $.ajax(
        {
            type:"POST",
            url: "../ruralinfo/dropData.php",
            data: {
                drop_land_tID : tID,
                },    
                success: function (status) { 

                    console.log(status);
                    // alert(status);

                    if(status == "Delete successfully"){
                        
                        swal({
                            title: "Success!",
                            text: "Delete Data successfully",
                            icon: "success",
                            button: "OK!",
                            }).then(function(){
                                window.location = "rPage5.php";
                        });
                        
                        
                    }else{
                        
                        swal({
                            title: "Error Occurd!",
                            text: "There has an error. Please findout!",
                            icon: "error",
                            button: "OK!",
                            }).then(function(){
                                window.location = "rPage5.php";
                        });


                    }
                    
                        
                },
                error: function (jqXhr, textStatus, errorMessage) { // error callback 
                        
                    alert("System error");
                }
        });
}
//.......... rPage5 end ..........

//.......... rPage6 start ..........
function r6DeleteRow(clickedId){

    //Delete data from culti land table
    
    var t_cid = clickedId;
    // alert(t_cid);

    $.ajax(
        {
            type:"POST",
            url: "../ruralinfo/dropData.php",
            data: {
                drop_culti : t_cid,
                },    
                success: function (status) { 

                    console.log(status);
                    // alert(status);

                    if(status == "Delete successfully"){
                        
                        swal({
                            title: "Success!",
                            text: "Delete Data successfully",
                            icon: "success",
                            button: "OK!",
                            }).then(function(){
                                window.location = "rPage6.php";
                        });
                        
                        
                    }else{
                        
                        swal({
                            title: "Error Occurd!",
                            text: "There has an error. Please findout!",
                            icon: "error",
                            button: "OK!",
                            }).then(function(){
                                window.location = "rPage6.php";
                        });


                    }
                    
                        
                },
                error: function (jqXhr, textStatus, errorMessage) { // error callback 
                        
                    alert("System error");
                }
        });
}
//.......... rPage6 end ..........

//.......... rPage7 start ..........
function r7DeleteRow(clickedId){

    //Delete data from culti land table
    
        var t_id = clickedId;

        $.ajax(
            {
                type:"POST",
                url: "../ruralinfo/dropData.php",
                data: {
                    drop_veh : t_id,
                    },    
                    success: function (status) { 

                        console.log(status);
                        // alert(status);

                        if(status == "Delete successfully"){
                            
                            swal({
                                title: "Success!",
                                text: "Delete Data successfully",
                                icon: "success",
                                button: "OK!",
                                }).then(function(){
                                    window.location = "rPage7.php";
                            });
                            
                            
                        }else{
                            
                            swal({
                                title: "Error Occurd!",
                                text: "There has an error. Please findout!",
                                icon: "error",
                                button: "OK!",
                                }).then(function(){
                                    window.location = "rPage7.php";
                            });

                        }
                                            
                    },
                    error: function (jqXhr, textStatus, errorMessage) { // error callback 
                            
                        alert("System error");
                    }
            });
}
//.......... rPage7 end ..........

//.......... rPage8 start ..........
function r8DeleteRow(clickedId){

  //Delete data from culti land table
  
      var sport_id = clickedId;

      $.ajax(
          {
              type:"POST",
              url: "../ruralinfo/dropData.php",
              data: {
                  drop_sport : sport_id,
                  },    
                  success: function (status) { 

                      console.log(status);
                      // alert(status);

                      if(status == "Delete successfully"){
                          
                          swal({
                              title: "Success!",
                              text: "Delete Data successfully",
                              icon: "success",
                              button: "OK!",
                              }).then(function(){
                                  window.location = "rPage8.php";
                          });
                          
                          
                      }else{
                          
                          swal({
                              title: "Error Occurd!",
                              text: "There has an error. Please findout!",
                              icon: "error",
                              button: "OK!",
                              }).then(function(){
                                  window.location = "rPage8.php";
                          });

                      }
                                          
                  },
                  error: function (jqXhr, textStatus, errorMessage) { // error callback 
                          
                      alert("System error");
                  }
          });
}
//.......... rPage8 end ..........

//.......... rPage9 start ..........
function r9DeleteRow(clickedId){

  //Delete data from culti land table
  
      var edu_id = clickedId;

      $.ajax(
          {
              type:"POST",
              url: "../ruralinfo/dropData.php",
              data: {
                  drop_edu : edu_id,
                  },    
                  success: function (status) { 

                      console.log(status);
                      // alert(status);

                      if(status == "Delete successfully"){
                          
                          swal({
                              title: "Success!",
                              text: "Delete Data successfully",
                              icon: "success",
                              button: "OK!",
                              }).then(function(){
                                  window.location = "rPage9.php";
                          });
                          
                          
                      }else{
                          
                          swal({
                              title: "Error Occurd!",
                              text: "There has an error. Please findout!",
                              icon: "error",
                              button: "OK!",
                              }).then(function(){
                                  window.location = "rPage9.php";
                          });

                      }
                                          
                  },
                  error: function (jqXhr, textStatus, errorMessage) { // error callback 
                          
                      alert("System error");
                  }
          });
}
//.......... rPage9 end ..........

//.......... rPage10 start ..........
function r10DeleteRow(clickedId){

  //Delete data from culti land table
  
      var ani_id = clickedId;

      $.ajax(
          {
              type:"POST",
              url: "../ruralinfo/dropData.php",
              data: {
                  drop_animal : ani_id,
                  },    
                  success: function (status) { 

                      console.log(status);
                      // alert(status);

                      if(status == "Delete successfully"){
                          
                          swal({
                              title: "Success!",
                              text: "Delete Data successfully",
                              icon: "success",
                              button: "OK!",
                              }).then(function(){
                                  window.location = "rPage10.php";
                          });
                          
                          
                      }else{
                          
                          swal({
                              title: "Error Occurd!",
                              text: "There has an error. Please findout!",
                              icon: "error",
                              button: "OK!",
                              }).then(function(){
                                  window.location = "rPage10.php";
                          });

                      }
                                          
                  },
                  error: function (jqXhr, textStatus, errorMessage) { // error callback 
                          
                      alert("System error");
                  }
          });
}
//.......... rPage10 end ..........

//.......... datatable row data delete function end ...........


//..... appointmnet accept and reject function start .....

function aprove(clicked_id){
    var x = clicked_id.id;
    // alert(x);	
   //
    $.ajax({
        type: "POST",
        url: "../notification/appoinmentUpdate.php",
        data: {
            approve: x
        },
        dataType: 'json',
        success: function(data) {
            
            // var mydata = data.split(',');
            // var status = mydata[0];
            // alert(status);
            // $("#nullstatus").html(data);
            if (data.return) {
                alert("Approve is confirmed");
                $('table#dataTable tr#'+x).remove();
                //$(".rowId")addClass("hidden");
                location.reload();
            } else {
                alert("Something went wrong");
            }
            console.log(data);

        }
    });	  
}

function reject(clicked_id){
      var y = clicked_id.id;
    // alert(y);
    $.ajax({
        type: "POST",
        url: "../notification/appoinmentUpdate.php",
        data: {
            reject: y
        },
        dataType: 'json',
        success: function(data) {
            // var mydata = data.split(',');
            // var status = mydata[0];
            // alert(status);
            // $("#nullstatus").html(data);
            if (data.return) {
                alert("Reject is confirmed");
                $('table#dataTable tr#'+y).remove();
                location.reload();
            } else {
                alert("Something went wrong");
            }
            console.log(data);

        }
    });	
}
//..... appointmnet accept and reject function end ......