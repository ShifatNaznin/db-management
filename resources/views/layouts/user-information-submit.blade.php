@extends('layouts.website') @section('content')

<div class="inner-section">
  <form class="contactform" id="confirmation" name="confirmation_form" action="{{route('user_information_submit')}}"
    method="post">
    @csrf
    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label for="">S.NO</label>
          <p class="validate form-control">{{ $item->id }}</p>

          <input name="id" type="hidden" placeholder="Name" class="validate form-control" required=""
            value="{{ $item->id }}" />
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label for="">Registration Number</label>
          <p class="validate form-control">{{ $item->registration_number }}</p>
          <input name="registration_number" type="hidden" placeholder="Name" class="validate form-control" required=""
            value="{{ $item->registration_number }}" />
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label for="">Ammount</label>
          <p class="validate form-control">{{ $item->ammount }}</p>
          <input type="hidden" placeholder="Ammount" name="ammount" value="{{ $item->ammount }}"
            class="validate form-control" required="" />
          <span class="input-focus-effect theme-bg"></span>
        </div>
      </div>

      <div class="col-md-6">
        <div class="form-group">
          <label for="">Full Name</label>
          <input id="name" name="full_name" type="text" placeholder="Full Name" value="{{old('full_name')}}"
            class="validate form-control" required="" />
          <span class="input-focus-effect theme-bg"></span>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label for="">Phone No</label>
          <input id="phone" v-model="phone" @focusout="send_message()" type="number" placeholder="Phone No" name="phone"
            value="{{old('phone')}}" class="validate form-control" required="" />
          <span class="input-focus-effect theme-bg"></span>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label for="">OTP</label>
          <input id="mobile" @keyup="check_otp()" v-model="otp_check_number" type="number" placeholder="OTP" name="otp"
            class="validate form-control" required="" />
          <span class="input-focus-effect theme-bg"></span>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label for="">Email</label>
          <input id="email" type="email" placeholder="Email" name="email" value="{{old('email')}}"
            class="validate form-control" required="" />
          <span class="input-focus-effect theme-bg"></span>
        </div>
      </div>

      <div class="col-md-6">
        <div class="form-group">
          <label for="">Division</label>
          <select name="division" class="form-control">
            <option disabled selected>Select Division</option>
            <option value="Barishal">Barishal</option>
            <option value="Chattogram">Chattogram</option>
            <option value="Dhaka">Dhaka</option>
            <option value="Khulna">Khulna</option>
            <option value="Mymensingh">Mymensingh</option>
            <option value="Rajshahi">Rajshahi</option>
            <option value="Rangpur">Rangpur</option>
            <option value="Sylhet">Sylhet</option>
          </select>
        </div>
      </div>
      <div class="col-md-12">
        <label for="">Address</label>
        <div class="form-group">
          <textarea id="message" placeholder="Your Address" name="address" class="form-control" required=""></textarea>
          <span class="input-focus-effect theme-bg"></span>
        </div>
      </div>

      <div class="col-md-12">
        <div class="send">
          <button v-if="!check_status" onclick="alert('your number not verified.')" disabled class="btn btn-primary"
            type="button" name="send">Submit</button>
          <button v-else class="btn btn-theme" @click.prevent="submit_form()" type="button" name="send">Submit</button>
        </div>
        <span class="output_message"></span>
      </div>
    </div>
  </form>
</div>

@push('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue@2.6.8/dist/vue.js"></script>
<script>
  if (document.getElementById("confirmation")) {
    const app = new Vue({
        el: "#confirmation",
        data: function () {
            return {
                form_data: {
                    id: null,
                    registration_number: null,
                    full_name: null,
                    phone: null,
                    email: null,
                    division: null,
                    status: null,
                    ammount: null,
                    otp: null,
                    address: null,
                },
                phone: "",
                otp: "",
                otp_check_number: "",
                check_status: false,
                user_amount: "",
            };
        },
        created: function () {
            // console.log('hi');
            this.send_message();
            this.check_otp();
            this.submit_form();
        },
        methods: {
            send_message: function () {
                this.otp = Math.floor(1000 + Math.random() * 9000);
                console.log(this.phone, this.otp);

                let message = "your otp confirmation number is " + this.otp;

                axios
                    .get(`http://hsblco.com/Sms_gateway/send-single-sms.php?number=${this.phone}&message=${message}`)
                    .then(function (response) {
                        // handle success
                        if (response.data.api_response_message == "SUCCESS") {
                          console.log(response.data);
                        } else {
                            swal({
                                title: "Error",
                                text: "Enter a valid phone number with country code.",
                                type: "error",
                                timer: 3000,
                            });
                        }
                    })
                    .catch(function (error) {
                        console.log(error.response);
                    });
            },
            check_otp: function () {
                if (this.otp_check_number != this.otp) {
                    console.log("otp does not matched");
                } else {
                    // console.log('ok', this.otp_check_number);
                    this.check_status = true;
                }
            },
            submit_form: function () {
                let form_datas = new FormData($("#confirmation")[0]);

                axios
                    .post("/user-information-submit", form_datas)
                    .then((res) => {
                        window.location = "/give-payment/";
                    })
                    .catch((error) => {
                        console.log(error.response);
                    });
            },
        },
    });
}

</script>
@endpush
@endsection
