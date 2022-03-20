function delet(id, avail) {
  const form = document.getElementById(id);
  const select = form.querySelector("select");
  const value = select.value;
  console.log(value);
  console.log(id);
  window.location.href = `http://localhost/lms/admin/delete.php?id1=${id}&id3=${value}`;
}
