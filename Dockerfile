FROM dreamlabs/php-composer:latest

RUN composer global require rskuipers/php-assumptions && \
    ln -s /root/.composer/vendor/bin/phpa /usr/bin/phpa;

ENTRYPOINT ["phpa"]