<script>
    const form_post = document.getElementById('form_post');
    const header = { "method": "POST"};
    const get_data = () =>{
        const data = Object.entries(new FormData(form_post));
        console.log(data);
        return data;

    }

    const upload  = async () =>{
        const data = get_data();
        try {
            const url = await(await fetch('http://localhost:4000' , header)).json;
            if(url.ok){
                console.log('Upload Success');
            }

        }   
        catch (error){
            console.log(error);
        }
    }
    form_post.addEventListener('submit', (event) =>{
        event.preventDefault();
        upload();
    })
    </script>

<?php 
    print_r($_POST);
    
?>