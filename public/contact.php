 <div class="span6">
                        <h5>Share Your Challenge</h5><?php echo $_GET[msg];?>
                        <form method="post" action="email/">
                            <input type="text" name ="name" id="name"class="span12" placeholder="Name" required="required">
                            <input type="email" name= "email" id="email" nameclass="span12" placeholder="Email" required="required">
                            <textarea rows="11" name="message" id="message" class="span12" required="required"></textarea>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>