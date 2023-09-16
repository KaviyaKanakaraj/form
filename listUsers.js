function delbtn(id) {
  result = confirm(
    "This action is irreversible. Are you sure you want to delete?"
  );
  if (result) {
    const form = document.createElement('form');
    form.method = 'post';
    form.action = 'delete.php';
    const inputId = document.createElement('input');
    inputId.type = 'text';
    inputId.name = 'id';
    inputId.value = id;
    form.appendChild(inputId);
    document.body.appendChild(form);
    form.submit();
  }
}
