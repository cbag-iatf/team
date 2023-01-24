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