function validasiInput(form){
    var user = 8;
    var telp = 30;
    email=/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    if (form.username.value=="") {
        alert("Nama Harus Diisi!");
        form.username.focus();
        return (false);
    } else if (form.username.value.length <= user) {
        alert("Username Harus Lebih dari 8 Karakter!");
        form.username.focus();
        return (false);
    } else if (form.email.value=="") {
        alert("Email Harus Diisi!");
        form.username.focus();
        return (false);
    } else if (!email.test(form.email.value)){
        alert ('Penulisan Email tidak benar');
        form.email.focus();
        return (false);
    } else if (form.telp.value=="") {
        alert("No Telp Harus Diisi!");
        form.telp.focus();
        return (false);
    } else if (form.telp.value.length >= telp) {
        alert("No Telp Harus Kurang dari 30 Karakter!");
        form.telp.focus();
        return (false);
    }
    else if (form.pesan.value=="") {
        alert("Pesan Harus Diisi!");
        form.pesan.focus();
        return (false);
    } else if (!pesan.test(form.pesan.value)){
        form.pesan.focus();
        return (false);
    } else if (form.password_1.value==""){
        alert("Password Tidak Boleh kosong!");
        form.password.focus();
        return (false);
    }
        return (true)
  }
   function pass() {
      var pass_1 = document.getElementById('password_1');
      var pass_2 = document.getElementById('password_2');
      var message = document.getElementById('pesan');
      if(pass_1.value == pass_2.value){
          document.validasiForm.daftar_process.disabled=false;
          message.innerHTML = ""
      }else{
          document.validasiForm.daftar_process.disabled=true;
          message.innerHTML = "Password harus sama!"
      }
  }