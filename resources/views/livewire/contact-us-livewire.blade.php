<div>
    <form wire:submit.prevent="save" class="contact-form ajax-contact">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <input type="text" class="form-control style-white" name="name" 
                        placeholder="Your Name*" wire:model.live="name">
                    <i class="fal fa-user"></i>
                    @error('name')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <input type="email" class="form-control style-white" name="email" 
                        placeholder="Email Address*" wire:model.live="email">
                    <i class="fal fa-envelope"></i>
                     @error('email')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <select name="subject"  wire:model.live="subject"
                        class="single-select nice-select form-select style-white">
                        <option value="" disabled="disabled" selected="selected" hidden>
                            Select Subject*</option>
                        <option value="Admission Inquiry">Admission Inquiry</option>
                        <option value="Complaint">Complaint</option>
                        <option value="Information Inquiry">Information Inquiry</option>
                        
                    </select>
                    
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <input type="tel" class="form-control style-white" name="number" 
                        placeholder="Phone Number*" wire:model.live="phone_no">
                    <i class="fal fa-phone"></i>
                     @error('phone_no')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <textarea name="message"  cols="30" rows="3" class="form-control style-white"
                        placeholder="Write Your Message*" wire:model.blur="message"></textarea>
                    <i class="fal fa-pen"></i>
                     @error('message')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="form-btn col-12 mt-10">
                <button class="th-btn">
                    Send Message<i class="fas fa-long-arrow-right ms-2"></i>
                </button>
            </div>
        </div>
       
    </form>
</div>
