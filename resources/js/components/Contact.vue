<<template>
<div>
	<div class="form-group">
		<router-link :to="{name: 'ajouterContact'}" class="btn btn-success">Ajouter un Contact</router-link>
	</div>

<!-- intergration fromulaire d'ajout  -->
 <form @submit.prevent="ajouterContact" method="post">
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label>Nom:</label>
            <input type="text" class="form-control" v-model="contact.nom" placeholder="Tapez votre nom">
          </div>
        </div>
      </div>
            
            <div class="row">
           <div class="col-md-6">
          <div class="form-group">
            <label>Phone:</label>
            <input type="text" class="form-control" v-model="contact.phone" placeholder="Tapez votre numero de telphone">
          </div>
          </div>
      </div>

             <div class="row">
           <div class="col-md-6">
          <div class="form-group">
            <label>Email:</label>
            <input type="text" class="form-control" v-model="contact.email" placeholder="Tapez votre email">
          </div>
        </div>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label>Message:</label>
              <textarea class="form-control" v-model="contact.message" rows="5"></textarea>
            </div>
          </div>
        </div><br />
        <div class="form-group">
          <button type="submit" class="btn btn-primary">Ajouter </button>
        </div>
    </form>

<!-- integration pagination a partir get bootrap -->

<nav aria-label="Page navigation example">
  <ul class="pagination">
    <li v-bind:class ="[{disabled: !pagination.prev_page_url}]"
     class="page-item">
        
    <a class="page-link" href="#"
    @click="fetchcontacts(pagination.prev_page_url)">Previous</a></li>



    <li class="page-item disabled"><a class="page-link text-drak" href="#">
        page{{pagination.current_page }} of {{pagination.last_page}}</a></li>
   
    <li  v-bind:class ="[{disabled: !pagination.next_page_url}]"
    class="page-item"><a class="page-link" href="#"
    @click="fetchcontacts(pagination.next_page_url)">Next</a></li>
  </ul>
</nav>
<div class="card card-body mb-2" v-for="contact in contacts" :key="contact.id">
          
                     <p>{{ contact.nom }}/<p>
                     <p>{{ contact.email }} </p>
                     <p>{{ contact.phone }}</p>
                     <p>{{ contact.message }}</p>
                     <p>{{ contact.role }}</p>
                     <hr>
    <button @click="deleteContacts(contact.id)" class="btn btn-danger">Delete</button>
    <button @click="editContacts(contact)" class="btn btn-warning">Update</button>
</div>
</div>
</template>

<script>
    export default {
        data(){
        return {
          contacts:[],
          contact: {
              id: '',
              nom: '',
              email: '',
              phone: '',
              role: '',
          },
          contact_id: '',
          pagination: {},
          contact_id: false
        }
    },
      ajouter(){
          this.fetchContacts();
      },
   



    methods: {
      //
     fetchContacts(page_url){
         let vm = this; 
         page_url = page_url || '/api/Contact';
          fetch('page_url')
          .then(res =>json())
          .then(res =>{
              this.contacts = res.data;
              vm.makepagination(res.meta, res.links);
             
          })
            .catch(err => console.log(err));
      },
      makepagination(meta, links) {
          let pagination = {
              current_page: meta.current_page,
              last_page: meta.last_page,
              mext_page_url: links.next,
              prev_page_url: links.prev
          }
         this.pagination = pagination; 
      },
 deleteContacts(id){
    if(confirm('est ce que  vous supprimer ce contact sur ?')){
        fetch(`api/contact/${id}` , {
             method :'delete'
         }
        )
       .then(res =>res.json() )
          .then(data =>{
              alert('Contact suprimer ');
             this.fetchContacts();

        })
        .catch(err => console.log(err));
    }
 }, 
      ajouterContact(){
          if(this.edit ===false ){
              //add
              fetch ('api/Contact', {
                  method: 'post',
                  body : JSON.stringify('this.contact'),
                  headers :{
                      'content-type': 'application/json'
                  }
              })
              .then(res => res.json())
              .then(data => {
                  this.contact.nom='';
                  this.contact.email='';
                  this.contact.phone='';
                  this.contact.message='';
                  this.contact.role='';
                   alert('contact ajouter avec success!');
                   this.fetchContacts();
        
              })
              .catch(err => console.log(err));
          } else {

          }
          //update 

            fetch ('api/contact', {
                  method: 'put',
                  body : JSON.stringify('this.contact'),
                  headers :{
                      'content-type': 'application/json'
                  }
              })
              .then(res => res.json())
              .then(data => {
                  this.contact.nom='';
                  this.contact.email='';
                  this.contact.phone='';
                  this.contact.message='';
                  this.contact.role='';
                   alert('contact modifier avec success!');
                   this.fetchContacts();
        
              })
              .catch(err => console.log(err));
      }
    },
         editContact(contact){
             this.edit=true;
             this.contact.id=contact.id;
             this.contact.contact_id=contact.id;
             this.contact.nom = contact.nom;
             this.contact.email = contact.email;
             this.contact.message = contact.message;
             this.contact.phone = contact.phone;
             this.contact.role = contact.role; 

         }
  }
</script>