

<?php $__env->startSection('content'); ?>
<div class="card">
    <div class="card-header">
        Create Question Option
    </div>

    <div class="card-body">
        <form action="<?php echo e(route('admin.questions.store')); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="form-group <?php echo e($errors->has('test') ? 'has-error' : ''); ?>">
                <label for="question_id">Test*</label>
                <select name="question_id" class="form-control" id="question_id" >
                    <?php $__currentLoopData = $questions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $question): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($id); ?>"><?php echo e($question); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
                <?php if($errors->has('question_id')): ?>
                    <em class="invalid-feedback">
                        <?php echo e($errors->first('question_id')); ?>

                    </em>
                <?php endif; ?>
            </div>
            <div class="form-group <?php echo e($errors->has('question') ? 'has-error' : ''); ?>">
                <label for="option_text">Option Text*</label>
                <textarea id="option_text" name="option_text" rows="5" class="form-control" required>
                    <?php echo e(old('option_text', isset($question_option) ? $question_option->option_text : '')); ?>

                </textarea>
                <?php if($errors->has('option_text')): ?>
                    <em class="invalid-feedback">
                        <?php echo e($errors->first('option_text')); ?>

                    </em>
                <?php endif; ?>
            </div>
            <div class="form-group <?php echo e($errors->has('score') ? 'has-error' : ''); ?>">
                <label for="correct">Correct*</label>
                <input type="checkbox" name="correct">
                <?php if($errors->has('correct')): ?>
                    <em class="invalid-feedback">
                        <?php echo e($errors->first('correct')); ?>

                    </em>
                <?php endif; ?>
            </div>
           
            <div>
                <button class="btn btn-danger" type="submit" >Save</button>
            </div>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\LENOVO\lms-project\resources\views/admin/question_options/create.blade.php ENDPATH**/ ?>