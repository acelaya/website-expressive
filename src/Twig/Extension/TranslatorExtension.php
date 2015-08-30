<?php
namespace Acelaya\Website\Twig\Extension;

use Zend\I18n\Translator\TranslatorInterface;

class TranslatorExtension extends AbstractExtension implements TranslatorInterface
{
    /**
     * @var TranslatorInterface
     */
    protected $translator;

    public function __construct(TranslatorInterface $translator)
    {
        $this->translator = $translator;
    }

    public function getFunctions()
    {
        return [
            new \Twig_SimpleFunction('translate', [$this, 'translate']),
            new \Twig_SimpleFunction('translate_plural', [$this, 'translatePlural']),
            new \Twig_SimpleFunction('locale', [$this, 'getLocale']),
        ];
    }

    /**
     * Translate a message.
     *
     * @param  string $message
     * @param  string $textDomain
     * @param  string $locale
     * @return string
     */
    public function translate($message, $textDomain = 'default', $locale = null)
    {
        return $this->translator->translate($message, $textDomain, $locale);
    }

    /**
     * Translate a plural message.
     *
     * @param  string $singular
     * @param  string $plural
     * @param  int $number
     * @param  string $textDomain
     * @param  string|null $locale
     * @return string
     */
    public function translatePlural(
        $singular,
        $plural,
        $number,
        $textDomain = 'default',
        $locale = null
    ) {
        return $this->translator->translatePlural($singular, $plural, $number, $textDomain, $locale);
    }

    public function getLocale()
    {
        return $this->translator->getLocale();
    }
}
