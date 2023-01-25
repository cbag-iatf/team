function showModel(id) {
    const frmDelete = document.getElementById("delete-frm");
    frmDelete.action = id;
    console.log(id)
    const confirmationModal = document.getElementById("deleteConfirmationModel");

    confirmationModal.classList.add('active');
    document.documentElement.classList.add('is-clipped')
  }
  
  function dismissModel() {
    const confirmationModal = document.getElementById("deleteConfirmationModel");
    confirmationModal.classList.remove('active');
    document.documentElement.classList.remove('is-clipped')
  }
  function dismissModel1(idModal) {
    document.getElementById(idModal).classList.remove("active");
  }


  /**
 *
 * @param idcompany
 * @param modalId
 */
function openModal(idcompany, modalId){
  console.log(modalId);
  document.getElementById(modalId).classList.toggle("active");
  $(`#${modalId}-content`).load(idcompany);
}

/**
 *
 * @param {string} idName  le meme name que celui mi au niveau du components (x-custom-select)
 * @param {*} data
 * @param  columnList
 * @param {*} idModal  le meme method que celui mi au niveau du components (x-custom-select)
 */
function selectPersoModal(idName, data, columnList, idModal) {
  let res = JSON.parse(data);
  let selectp = $(`#${idName}`);
  selectp.html('');
  console.log(res);
  console.log(columnList);
  selectp.append(`<option value='${res[columnList[0]]}' selected='selected'>${res[columnList[0]]} | ${res[columnList[1]]}  ${res[columnList[2]] !== undefined ?' | '+res[columnList[2]]: ''}</option>`);
  $(`#${idName}_val`).val(res[columnList[0]]).trigger('change');
  
  document.getElementById(idModal).classList.remove("active");
}

function showJdatatable(idTable, search, lengthMenu,emptyTable,first, previous, next, last,order=1){
  const tables = $(idTable).DataTable({
      "aLengthMenu": [[5,10,25,50,100,-1], [5,10,25,50,100,"All"]],
      info: false,
      order: [[order, 'desc']],
      autoWidth: false,
      language: {
          search:         search,
          lengthMenu:    lengthMenu,
          emptyTable:     emptyTable,
          paginate: {
              first:      first,
              previous:   previous,
              next:       next,
              last:       last
          },
      },
      buttons: [
          { extend: 'excel',className: 'exportExcel', exportOptions: { modifier: { page: 'all'} } },
          {  extend: 'print', className: 'printFile' },
          { extend: 'pdf',className: 'pdfFile', exportOptions: { modifier: { page: 'all' } } },
      ]
  });
  // tables.buttons().container().appendTo(`${idTable}_wrapper .col-md-6:eq(0)`);
}