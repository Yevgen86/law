<template>
    <div>
       <!-- <form action="#" @submit.prevent="edit ? updateContact(contact.id) : createContact()">-->
            <form action="#" @submit.prevent="createContact()">

                <!-- v-step open-->
            <div v-if="step === 1" class="card-body">

                <div class="form-group">
                    <label>vorname</label>
                    <input v-model="contact.firstname" type="text" name="firstname" class="form-control">
                </div>
                <div class="form-group">
                    <label>nachname</label>
                    <input v-model="contact.lastname" type="text" name="lastname" class="form-control">
                </div>
                <div class="form-group">
                    <label>email</label>
                    <input v-model="contact.email" type="text" name="email" class="form-control">
                </div>

                <div class="form-group">
                    <label>telefon</label>
                    <input v-model="contact.phone" type="text" name="phone" class="form-control">
                </div>

                <div class="form-group row mb-0 mt-4">
                    <div class="col-12">
                        <button @click.prevent="next()" class="btn btn-primary btn-block">Weiter</button>
                    </div>
                </div>
            </div>
            <!-- v-step closed-->

            <div v-if="step === 2" class="card-body">
                <div class="form-group row">
                    <label for="thema" class="col-md-4 col-form-label text-md-right">Bitte wählen sie ihr Thema</label>
                    <div class="col-md-6">
                        <select id="thema" name="thema" class="form-control" v-model="contact.thema">
                            <option value="Erstgespräch" selected="selected">Erstgespräch</option>
                            <option value="Datenschutzberatung">Datenschutzberatung</option>
                            <option value="Erbrecht">Erbrecht</option>
                            <option value="Prozessvertretung">Prozessvertretung</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4 mt-4">
                        <button @click.prevent="prev()" class="btn btn-secondary">Zurück</button>
                        <button @click.prevent="next()" class="btn btn-primary">Weiter</button>
                    </div>
                </div>
            </div>
            <!-- v-step closed-->

            <div v-if="step === 3" class="card-body">
                <div class="form-group row mt-4">
                    <div class="col-8">
                        <label>Haben Sie eine Rechsschutzversicherung?</label>
                    </div>
                    <div class="col-2">
                        <input type="radio" id="one" value="ja" v-model="contact.rechtsschutz">
                        <label for="one">ja</label>
                    </div>
                    <div class="col-2">
                        <input type="radio" id="two" value="nein" v-model="contact.rechtsschutz">
                        <label for="two">nein</label>
                    </div>
                </div>

                <div class="form-group row mt-4">
                    <div class="col-8">
                        <label>Haben Sie bereits einen Rechsvertreter?</label>
                    </div>
                    <div class="col-2">
                        <input type="radio" id="ja" value="ja" v-model="contact.rechtsvertretung">
                        <label for="one">ja</label>
                    </div>
                    <div class="col-2">
                        <input type="radio" id="nein" value="nein" v-model="contact.rechtsvertretung">
                        <label for="two">nein</label>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-6 offset-md-4 mt-4">
                    <button @click.prevent="prev()" class="btn btn-secondary">Zurück</button>
                    <button v-show="!edit" type="submit" class="btn btn-success">Anfrage senden</button>
                </div>
                </div>

            </div>
            <!-- v-step closed-->
        </form>
        <br/><br/>
        <!--Debug: {{contact}}-->
    </div>
</template>

<script>
    export default {
        data: function () {
            return {
                step: 1,
                edit: false,
                list: [],
                contact: {
                    id: '',
                    firstname: '',
                    lastname: '',
                    email: '',
                    phone: '',
                    thema: '',
                    rechtsschutz: '',
                    rechtsvertretung: ''
                }
            }
        },
        mounted: function () {
            console.log('Contacts Component Loaded...');
            this.fetchContactList();
        },
        methods: {
            prev() {
                this.step--;
            },
            next() {
                this.step++;
            },
            checkForm: function (e) {
                this.errors = [];

                if (this.contact.firstname === '') {
                    alert('Submit to blah and show blah and etc.');
                }
            },
            createContact: function () {
                console.log('Creating contact...');
                let self = this;
                let params = Object.assign({}, self.contact);
                axios.post('api/contact/store', params)
                    .then(function () {
                        self.contact.firstname = '';
                        self.contact.lastname = '';
                        self.contact.email = '';
                        self.contact.phone = '';
                        self.contact.thema = '';
                        self.contact.rechtsschutz = '';
                        self.contact.rechtsvertretung = '';

                        self.edit = false;
                        window.location.href = '/response';
                        self.fetchContactList();
                    })
                    .catch(function (error) {
                        console.log(error);
                    });
            }
        }
    }
</script>
