<?php


namespace App\Infra\Services;



use App\Infra\Models\ContentPages;

/**
 * Class ImplementServices
 * @package App\Infra\Services
 */
class ImplementServices
{
    private $contentPages;

    public function __construct(ContentPages $contentPages)
    {
        $this->contentPages = $contentPages;
    }

    public function getContentPagesCreat(string $contentTitle, string $content): string
    {
        $data = ['title' => $contentTitle,
                 'content' => $content
        ];
        return $this->contentPages->contentPagesCreat($data);
    }
}
