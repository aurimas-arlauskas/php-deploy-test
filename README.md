# php-deploy-test
Test3
A minimal, multi-page PHP website used to test GitHub OAuth-based deployment
integrations for PHP hosting providers.

## Contents

- `index.php` — landing page that prints the live PHP version, server software,
  and current timestamp. If these render dynamically (rather than showing raw
  `<?php ?>` tags), the host is correctly executing PHP.
- `about.php` — second page, confirms multi-page routing after deploy.
- `header.php` — shared header partial pulled in via `include`. Confirms that
  multi-file deploys are working.

## How to use

1. Connect your host's Git/OAuth integration to this repository.
2. Deploy the `main` branch to your web root.
3. Open the deployed URL — you should see the **PHP Deploy Test** page with
   live runtime values populated.

No build step, no dependencies, no `composer.json` — just plain PHP files.
