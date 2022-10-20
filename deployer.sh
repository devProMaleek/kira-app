set -e
echo "Deploy Kira Application....."

# Enter maintenance mode
(php artisan down --message "The app is beeing (quickly) updated. Please try again in a few minutes") || true
    # Update Codebase
    git pull origin main
# Exit Maintenance Mode
php artisan up

echo "Application deployed successfully"
