# PHP2Shell — Runtime RCE Lab

A hands-on web-exploitation lab built around **CVE-2026-109618** (memory disclosure) and
**CVE-2026-109619** (remote code execution) — the "PHP2Shell" flaws in the PHP runtime. The
lab demonstrates a critical lesson for VAPT practitioners: an application can be fully patched
and cleanly coded and still be remotely compromised, because the vulnerability lives in PHP
itself, beneath the app.

## What it teaches

- How `session.upload_progress` runs during request parsing, **before any application code**.
- How a PHP memory **bailout** (`longjmp` on out-of-memory) leaves a dangling pointer (CWE-824)
  that survives into the next request under Apache prefork `mod_php`.
- The two CVEs: a memory-disclosure path (ASLR defeat) and a code-execution path.
- Running the public exploit chain against the lab target to prove impact.
- Detecting the attack and applying the mitigations that actually work.

## Target

- Deliberately vulnerable **PHP 8.4.26 + Apache** container, bound to `127.0.0.1:8088`.
- Single worker, low `memory_limit`, `session.upload_progress` enabled — tuned so the lab is
  reliably reproducible.
- Flag: `FLAG{PHP_1SN'T_S4F3_4NYM0R3}`.

## Contents

| File | Purpose |
|------|---------|
| `PHP2Shell-Walkthrough.docx` | VAPT walkthrough — objectives, scenario, fingerprinting, exploitation arc, detection, remediation, answer key |
| `php2shell-submit.html` | Self-contained submission page (4 questions, SHA-256-hashed answers, scored /100) |

## Scoring (submission page)

| # | Question | Points |
|---|----------|--------|
| 1 | Default upload-progress form field name | 20 |
| 2 | One-word name for the fatal-error `longjmp` | 20 |
| 3 | PHP version on the target | 20 |
| 4 | Exploit the site and submit the flag | 40 |

## Remediation (covered in the walkthrough)

Patch the **PHP runtime** to 8.5.12 / 8.4.27 / 8.3.36 / 8.2.35 and restart all workers —
updating the application (WordPress, Laravel, etc.) does nothing. Interim controls: disable
`session.upload_progress`, `opcache.enable=0`, reject `multipart/form-data` at the edge, run
least-privilege. A PHP-module WAF **cannot** see this attack; protection must sit in the patched
runtime or in front of PHP.

## ⚠️ Authorised use only

Intentionally vulnerable, for isolated closed-lab training only. These CVEs are under active
exploitation in the wild — do not expose the target to any untrusted network, and only run the
exploit against systems you are explicitly authorised to test.
