function add_diddikicker() {
    let first_name=document.getElementById("first_name").value;
    let last_name=document.getElementById("last_name").value;
    let parents_first_name=document.getElementById("parents_first_name").value;
    let parents_last_name=document.getElementById("parents_last_name").value;
    let date_of_birth=document.getElementById("date_of_birth").value;
    let telephone=document.getElementById("telephone").value;
    let email=document.getElementById("email").value;
    let address=document.getElementById("address").value;
    let venue=document.getElementById("venue").value;
    let class_name=document.getElementById("class_name").value;
    let facebook_name=document.getElementById("facebook_name").value;
    let allergies=document.getElementById("allergies").value;
    let status=document.getElementById("status").value;
    let how_enquired=document.getElementById("how_enquired").value;
    let date_enquired=document.getElementById("date_enquired").value;
    let heard_about_us=document.getElementById("heard_about_us").value;
    let direct_debit_day=document.getElementById("direct_debit_day").value;
    let note=document.getElementById("note").value;

    if( first_name && last_name && parents_first_name && parents_last_name && date_of_birth && telephone && email &&
        address && venue && class_name && facebook_name && allergies && first_name && status &&
        how_enquired && date_enquired && heard_about_us && direct_debit_day && note ) {
            const res=fetch('/admin/diddikickers', {
                method: 'POST',
                headers : {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    'Accept': 'application/json'
                },
                body: JSON.stringify({
                    first_name: first_name,
                    last_name: last_name,
                    parents_first_name: parents_first_name,
                    parents_last_name: parents_last_name,
                    date_of_birth: date_of_birth,
                    telephone: telephone,
                    email: email,
                    address: address,
                    venue: venue ,
                    class_name: class_name,
                    facebook_name: facebook_name,
                    allergies: allergies,
                    status: status,
                    how_enquired: how_enquired,
                    date_enquired: date_enquired,
                    heard_about_us: heard_about_us,
                    direct_debit_day: direct_debit_day,
                    note: note

                })
            })
                .then(response=>{
                        let new_response = response.json()
                             new_response.then((value => {
                                 if(value.success){
                                     alert(value.success)

                                 }else{
                                     alert(value.message)

                                 }


                             }))

                    }
                )

    }
    else{
        alert("Please Enter all value");

    }


}
