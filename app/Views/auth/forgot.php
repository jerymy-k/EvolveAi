<!doctype html>
<html lang="en" class="light">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Forgot Password - AI Income Hub</title>
  <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;800&display=swap" rel="stylesheet" />
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: { primary: "#135bec" }
        }
      }
    }
  </script>
  <style>body{font-family:Inter,sans-serif}</style>
</head>

<body class="min-h-screen bg-[#f6f6f8] flex items-center justify-center px-6">
  <div class="w-full max-w-md bg-white rounded-2xl shadow-xl p-8">
    <div class="mb-6">
      <h1 class="text-2xl font-extrabold text-[#0d121b]">Forgot password</h1>
      <p class="text-sm text-slate-500 mt-1">Enter your email to receive a reset link.</p>
    </div>

    <?php if (!empty($error)): ?>
      <div class="mb-4 rounded-xl border border-red-200 bg-red-50 px-4 py-3 text-sm text-red-700">
        <?= htmlspecialchars($error) ?>
      </div>
    <?php endif; ?>

    <?php if (!empty($success)): ?>
      <div class="mb-4 rounded-xl border border-green-200 bg-green-50 px-4 py-3 text-sm text-green-700">
        <?= htmlspecialchars($success) ?>
      </div>
    <?php endif; ?>

    <form method="POST" action="/auth/forgotPassword" class="space-y-4">
      <div>
        <label class="block text-sm font-semibold text-[#0d121b] mb-2">Email Address</label>
        <input
          type="email"
          name="email"
          required
          placeholder="name@example.com"
          value="<?= htmlspecialchars($_POST['email'] ?? '') ?>"
          class="w-full h-12 rounded-lg border border-slate-200 px-4 focus:border-primary focus:ring-1 focus:ring-primary"
        />
      </div>

      <button
        type="submit"
        class="w-full h-12 rounded-lg bg-primary text-white font-bold hover:opacity-90 transition"
      >
        Send Reset Link
      </button>
    </form>

    <p class="mt-6 text-center text-sm text-slate-500">
      Remembered your password?
      <a href="/auth/login" class="text-primary font-bold hover:underline">Back to login</a>
    </p>
  </div>
</body>
</html>
