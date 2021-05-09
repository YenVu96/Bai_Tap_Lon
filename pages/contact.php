
<div class="contactform">
    <center><h2 class="heading-text">Liên hệ</h2></center>

    <div class="form">
        <form action="" onsubmit="return contact();">
            <label for="name">Họ Tên<span class="txt-red" id="error-name"> (*)</span></label>
            <input class="input-contactform" type="text" id="name" name="name" placeholder="Nhập họ và tên...">
    
            <label for="name">Email<span class="txt-red" id="error-email"> (*)</span></label>
            <input class="input-contactform"  type="text" id="email" name="email" placeholder="Nhập email...">
    
            <label for="number">Số Điện Thoại<span class="txt-red" id="error-phone"> (*)</span></label>
            <input class="input-contactform"  type="text" id="phone" name="phone" placeholder="Nhập số điện thoại...">
    
            <label for="address">Địa Chỉ<span class="txt-red" id="error-address"> (*)</span></label>
            <input class="input-contactform" type="text" id="address" name="address" placeholder="Nhập địa chỉ...">
    
            <center><input  class="input-submitform" class="input-contactform" type="submit" value="Submit"></center>
        </form>
    </div>  
</div>
    <div>
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14896.112114794652!2d105.76454396789889!3d21.031564475947505!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313454bab8c5e73b%3A0x15f3308da6ba66c4!2zTeG7uSDEkMOsbmggMiwgVOG7qyBMacOqbSwgSMOgIE7hu5lpLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1618993507422!5m2!1svi!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
	</div>

<script>
    function contact(){
        var name = document.getElementById('name').value;
        var errorName = document.getElementById('error-name');
        var regexName = /^[^\d+]*[\d+]{0}[^\d+]*$/;

        if(name == ''){
            errorName.innerHTML =  'Không được để trống ô này!';
            document.getElementById('name').focus();
        }else if(!regexName.test(name)){
            errorName.innerHTML =  'Không được để trống ô này!';
        }else{
            errorName.innerHTML = '';
        }
         //check email
        var email = document.getElementById('email').value;
        var errorEmail = document.getElementById('error-email');
        var regexEmail =  /[A-Z0-9._%+-]+@[A-Z0-9-]+.+.[A-Z]{2,4}/igm;

        if(email ==''){
            errorEmail.innerHTML =  'Không được để trống ô này!';
        }else if(!regexEmail.test(email)){
            errorEmail.innerHTML = ' Email sai định dạng!';
        }else{
            errorEmail.innerHTML = '';
        }
        //check phone
        var phone = document.getElementById('phone').value;
        var errorPhone = document.getElementById('error-phone');
        var regexPhone = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im;

        if(phone == ''){
            errorPhone.innerHTML =  'Không được để trống ô này!';
        }else if(!regexPhone.test(phone)){
            errorPhone.innerHTML = ' SĐT không đúng định dạng!';
        }else{
            errorPhone.innerHTML ='';
        }
        //check address
        var address = document.getElementById('address').value;
        var errorAddress = document.getElementById('error-address');
        if(address == '' || address == null){
            errorAddress.innerHTML = ' Địa chỉ không được để trống!';
        }else{
            errorAddress.innerHTML ='';
        }
        if(name && email && phone && address){
            window.location.href = "index.php";
        }
        return false;
    }

</script>

