
<?php if (isset($component)) { $__componentOriginal5863877a5171c196453bfa0bd807e410 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5863877a5171c196453bfa0bd807e410 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layouts.app','data' => ['title' => 'Photos']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layouts.app'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('Photos')]); ?>
    <div class="p-6">
        <h1 class="text-2xl font-bold mb-6">Galerie</h1>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            <?php $__currentLoopData = range(1, 8); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="group overflow-hidden rounded-lg shadow hover:shadow-lg cursor-pointer transition-all duration-200">
                    <img
                        src="https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/489830/ss_5d19c69d33abca6f6271d75f371d4241c0d6b2d1.1920x1080.jpg"
                        alt="Image <?php echo e($i); ?>"
                        class="w-full h-auto transform group-hover:scale-105 transition-transform duration-300"
                        onclick="openImageModal('<?php echo e($i); ?>')"
                    >
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>

    
    <div
        id="imageModal"
        class="fixed inset-0 bg-black/80 flex items-center justify-center hidden z-50"
        onclick="closeImageModal()"
    >
        <img id="modalImage" class="w-auto max-w-full max-h-screen rounded whadow-xl" src="" alt="Image Agrandie">
    </div>

    <script>
        function openImageModal(id) {
            const modal = document.getElementById('imageModal');
            const image = document.getElementById('modalImage');
            image.src = `https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/489830/ss_5d19c69d33abca6f6271d75f371d4241c0d6b2d1.1920x1080.jpg?t=1721923149`;
            modal.classList.remove('hidden');
        }

        function closeImageModal() {
            document.getElementById('imageModal').classList.add('hidden');
        }
    </script>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5863877a5171c196453bfa0bd807e410)): ?>
<?php $attributes = $__attributesOriginal5863877a5171c196453bfa0bd807e410; ?>
<?php unset($__attributesOriginal5863877a5171c196453bfa0bd807e410); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5863877a5171c196453bfa0bd807e410)): ?>
<?php $component = $__componentOriginal5863877a5171c196453bfa0bd807e410; ?>
<?php unset($__componentOriginal5863877a5171c196453bfa0bd807e410); ?>
<?php endif; ?>
<?php /**PATH /var/www/html/resources/views/photos/index.blade.php ENDPATH**/ ?>