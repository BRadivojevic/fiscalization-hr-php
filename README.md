# Croatian Fiscalization (PHP)

Create and submit fiscal invoices (HR). Handles certificate signing, payload build, and submission.

## Setup
1) Copy `.env.example` → `.env`, point `CERT_PATH` to your PFX and set `CERT_PASS`.
2) Run `php bin/issue.php examples/invoice.json`.

## Notes
- Implements retries/backoff and clock-skew handling.
- Do not commit certificates.
