<!-- <!doctype html> --> 
<!-- Doctype for partial html validation testing  -->
<section id="contact">
    <h2 class="hidden">Because a Donor Website - Contact Us</h2>
    <div class="row">
        <div class="col-xs-12 col-sm-offset-0 col-md-6 col-md-offset-3">
            <form>
                <h3>Contact Us</h3>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control" id="name" placeholder="John..." required="required" />
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" placeholder="name@website.com" required="required" /></div>
                            <div class="form-group">
                                <!-- <label for="subject">I'm contacting regarding:</label> -->
                                <select id="subject" name="subject" class="form-control" required="required">
                                    <option value="na" selected="">I'm contacting regarding:</option>
                                    <option value="question">Question/Comment</option>
                                    <option value="story">Regarding my story (edit or remove your story)</option>
                                    <option value="donation">I'd like to make a donation to BecauseADonor</option>
                                    <option value="website">Found an issue with the website</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Message:</label>
                                <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
                                placeholder="I'd like to edit some content on my story."></textarea>
                            </div>
                        </div>
                        <div class="col-md-5 col-md-offset-7">
                            <button type="submit" class="btnB3" id="btnContactUs">
                            Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
        </section>