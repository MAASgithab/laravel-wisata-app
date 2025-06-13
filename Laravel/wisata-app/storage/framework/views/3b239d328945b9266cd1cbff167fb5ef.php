<?php $__env->startSection('content'); ?>
    
    <div class="container mt-5" style="width: 30%; background-color: #14db1ea8; padding:100px; border-radius: 15px 50px; ">
        <h1 class="text-center mb-4">Contact Us</h1>
        <form>
            <?php echo csrf_field(); ?>
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">Message</label>
                <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Send Message</button>
        </form>
    </div>
    




<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\wisata-app\resources\views/contact.blade.php ENDPATH**/ ?>